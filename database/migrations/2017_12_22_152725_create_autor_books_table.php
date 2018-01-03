<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorBooksTable extends Migration {

	public function up(){
		Schema::create('autor_books', function(Blueprint $table){
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->foreign('book_id')->references('id')->on('books');
			$table->integer('author_id')->unsigned();
			$table->foreign('author_id')->references('id')->on('authors');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('autor_books');
	}

}
