<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookCreateRequest extends Request {

	public function authorize(){
		return true;
	}

	public function rules(){
		return [
			'title' => 'min:10|max:120|required',
			'description' => 'required',
			'isbn' => 'required',
			'price' => 'required|numeric',
			'year' => 'required|numeric',
			'cover' => 'required|image',
		];

	}
}
