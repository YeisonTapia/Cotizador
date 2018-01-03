<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Category;

class ImportController extends Controller {

	public function index () {
		return view ('import.index');
	}

	public function store () {
		dd('OK en load');
	}

}
