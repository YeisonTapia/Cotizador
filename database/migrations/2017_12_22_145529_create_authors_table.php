<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	public function up(){
		Schema::create('authors', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
	}

	public function down(){
		Schema::drop('authors');
	}

}
