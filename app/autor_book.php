<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class autor_book extends Model {

	protected $table = 'autor_books';
	protected $fillable = ['book_id', 'author_id'];	

}
