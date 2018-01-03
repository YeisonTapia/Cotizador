<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

	protected $table = 'authors';
	protected $fillable = ['name'];

	public function books(){
        return $this->belongsToMany('App\Book');
    }

}
