<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	} 

	public function index(){
		$authors = Author::all();
		return view ('author.index', compact('authors'));
	}

	public function create(){
		return view ('author.create');
	}

	public function store(Request $request){
		$author = new Author;
		$author->fill($request->all());
		$author->save();
		return redirect ('/author')->with('message','store');
	}

	public function show($id){
		$author = Author::find($id);
		return view ('author.show',compact('author'));
	}

	public function edit($id){
		$author = Author::find($id);
		return view ('author.edit',compact('author'));
	}

	public function update($id, Request $request){
		$author = Author::find($id);
		$author->fill($request->all());
		$author->save();
		return redirect ('/author')->with('message','update');
	}

	public function destroy($id){
		$author = Author::find($id);
		$author->delete();
		return redirect ('/author')->with('message','destroy');
	}

}