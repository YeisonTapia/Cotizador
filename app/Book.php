<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Book extends Model {

	protected $table = 'books';
	protected $fillable = ['title', 'cover', 'description','isbn','price','year'];	

	public function authors(){
        return $this->belongsToMany('App\Author', 'autor_books', 'book_id', 'author_id');
    }

    public function categories(){
        return $this->belongsToMany('App\Category', 'category_books', 'book_id', 'category_id');
    }

    public function setCoverAttribute($cover){
        if(!empty($cover)){
            $this->attributes['cover'] = Carbon::now()->second.$cover->getClientOriginalName();
            $name = Carbon::now()->second.$cover->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($cover));
        }
    }

}
