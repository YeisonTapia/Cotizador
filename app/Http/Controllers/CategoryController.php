<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	} 

	public function index(){
		$categories = Category::paginate(10);
		return view ('category.index', compact('categories'));
	}

	public function create(){
		return view ('category.create');
	}

	public function store(Request $request){
		$category = new Category;
		$category->fill($request->all());
		$category->save();
		return redirect ('/category')->with('message','store');
	}

	public function show($id){
		$category = Category::find($id);
		return view ('category.show',compact('category'));
	}

	public function edit($id){
		$category = Category::find($id);
		return view ('category.edit',compact('category'));
	}

	public function update($id, Request $request){
		$category = Category::find($id);
		$category->fill($request->all());
		$category->save();
		return redirect ('/category')->with('message','update');
	}

	public function destroy($id){
		$category = Category::find($id);
		$category->delete();
		return redirect ('/category')->with('message','destroy');
	}

}