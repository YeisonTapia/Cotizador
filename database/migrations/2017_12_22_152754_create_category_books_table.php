<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryBooksTable extends Migration {

	public function up(){
		Schema::create('category_books', function(Blueprint $table)	{
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->foreign('book_id')->references('id')->on('books');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('category_books');
	}

}
