<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class CartController extends Controller {

	public function __construct(){
		if(!\Session::has('cart')) \Session::put('cart', array());
	} 

	// show cart
	public function show(Request $request){
		$cart = \Session::get('cart');
		$total = $this->total();
		if ($request->ajax()) {
			return response()->json(view('front.cotization', compact('cart','total'))->render());
		}
	}

	//add item
	public function add(Book $book, $quantity){
		$cart = \Session::get('cart');
		//$book->quantity = 1;
		$book->quantity = $quantity;
		$cart[$book->id] = $book;
		\Session::put('cart', $cart);
	}

	//delete item
	public function delete(Book $book){
		$cart = \Session::get('cart');
		unset($cart[$book->id]);
		\Session::put('cart', $cart);
	}

	//update quantity item
	public function update (Book $book, $quantity){
		$cart = \Session::get('cart');
		$cart[$book->id]->quantity = $quantity;
		\Session::put('cart', $cart);
	}

	// trash cart
	public function trash(){
		\Session::forget('cart');
	}

	// total
    private function total(){
    	$cart = \Session::get('cart');
    	$total = 0;
    	foreach($cart as $item){
    		$total += $item->price * $item->quantity;
    	}
    	return $total;
    }

    private function quantitytotal(){
    	$cart = \Session::get('cart');
    	$quantitytotal = 0;
    	foreach($cart as $item){
    		$quantitytotal += $item->quantity;
    	}
    	return $quantitytotal;
    }

    public function barrainfo () {
		$total = $this->total();
		$quantitytotal = $this->quantitytotal();	
		return response()->json(view('front.barrainfo', compact('total','quantitytotal'))->render());	
	}

}
