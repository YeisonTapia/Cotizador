<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BookCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Category;
use App\autor_book;
use App\category_book;

class BookController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	} 

	public function index(){
		$books = Book::paginate(10);
		return view ('book.index', compact('books'));
	}

	public function create(){
		$authors = Author::lists('name','id');
		$categories = Category::lists('name', 'id');
		return view ('book.create', compact('authors', 'categories'));
	}

	public function store(BookCreateRequest $request){

		$book = new Book;
		$book->fill($request->all());
		$book->save();

        for ($i=0; $i < count($request->input('authors')) ; $i++) { 
			autor_book::create([
				'book_id' => $book->id,
				'author_id' => $request->input('authors')[$i],
			]);
        }

        for ($i=0; $i < count($request->input('categories')) ; $i++) { 	 
			category_book::create([
				'book_id' => $book->id,
				'category_id' => $request->input('categories')[$i],
			]);
        }

		return redirect ('/book')->with('message','store');
	}

	public function show($id){
		$book = Book::find($id);
		return view ('book.show',compact('book'));
	}

	public function edit($id){
		$book = Book::find($id);
		$authors = Author::all();
		$categories = Category::all();
		$selectedauthors =  $book->authors;
		$selectedcategories =  $book->categories;
		return view ('book.edit',compact('book', 'authors', 'categories', 'selectedauthors', 'selectedcategories'));
	}

	public function update($id, Request $request){

		$book = Book::find($id);
		$book->fill($request->all());
		$book->save();

		$authors = autor_book::where('book_id', '=', $id)->delete();
		$categories = category_book::where('book_id', '=', $id)->delete();

		for ($i=0; $i < count($request->input('authors')) ; $i++) { 
			autor_book::create([
				'book_id' => $book->id,
				'author_id' => $request->input('authors')[$i],
			]);
        }

        for ($i=0; $i < count($request->input('categories')) ; $i++) { 	 
			category_book::create([
				'book_id' => $book->id,
				'category_id' => $request->input('categories')[$i],
			]);
        }

		return redirect ('/book')->with('message','update');
	}

	public function destroy($id){
		$authors = autor_book::where('book_id', '=', $id)->delete();
		$categories = category_book::where('book_id', '=', $id)->delete();
		$book = Book::find($id)->delete();
		return redirect ('/book')->with('message','destroy');
	}

}