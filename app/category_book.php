<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class category_book extends Model {

	protected $table = 'category_books';
	protected $fillable = ['book_id', 'category_id'];	

}
