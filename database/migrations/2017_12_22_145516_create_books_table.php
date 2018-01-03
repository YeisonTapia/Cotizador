<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	public function up(){
		Schema::create('books', function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->string('cover');
			$table->string('description');
			$table->string('isbn');
			$table->string('price');
			$table->string('year');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('books');
	}

}
