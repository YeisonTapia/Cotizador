<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| 	Here is where you can register all of the routes for an application.
| 	It's a breeze. Simply tell Laravel the URIs it should respond to
| 	and give it the controller to call when that URI is requested.
|	Route::get('/', 'WelcomeController@index');
*/

Route::bind('books', function($id){
	return App\Book::where('id', $id)->first();
});


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('author','AuthorController');
Route::resource('category','CategoryController');
Route::resource('book','BookController');
Route::resource('import', 'ImportController');
Route::resource('/', 'PublicationController');
Route::get('/publicationlist/{id}', 'PublicationController@publicationlist');
Route::get('/publication/{id}', 'PublicationController@publication');
Route::get('/barrainfo', 'CartController@barrainfo');

/*
|--------------------------------------------------------------------------
| Carrito
|--------------------------------------------------------------------------
*/

Route::get('cart/show', ['as' => 'cart-show', 'uses' => 'CartController@show']);
Route::get('cart/add/{books}/{quantity}', ['as' => 'cart-add', 'uses' => 'CartController@add']);
Route::get('cart/delete/{books}', ['as' => 'cart-delete', 'uses' => 'CartController@delete']);
Route::get('cart/trash', ['as' => 'cart-trash', 'uses' => 'CartController@trash']);
Route::get('cart/update/{books}/{quantity}', ['as' => 'cart-update', 'uses' => 'CartController@update']);

/*
|--------------------------------------------------------------------------
| Exporta a excel y enviar por correo
|--------------------------------------------------------------------------
*/

Route::get('excel', ['as' => 'get-excel', 'uses' => 'ExportSendController@excel']);
