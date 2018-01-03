<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Category;
use App\autor_book;
use App\category_book;

class PublicationController extends Controller {

	public function index(Request $request){
		$categories = Category::all();
		return view ('front.index', compact('categories'));
	}

	public function publicationlist ($id, Request $request) {
		$books = Book::whereHas('categories', function($q) use ($id){
			$q->where('categories.id', '=', $id);
		})->get();
		if ($request->ajax()) {
			return response()->json(view('front.table', compact('books'))->render());
		} 
	}

	public function publication ($id, Request $request) {
		$book = Book::find($id);
		if ($request->ajax()) {
			return response()->json(view('front.modalcontent', compact('book'))->render());
		} 
	}

}
