<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportSendController extends Controller {

	public function excel (){
	        Excel::create('Cotizacion', function($excel) {
	            $excel->sheet('Cotización', function($sheet) {

					$sheet->row(1, ['ISBN', 'Titulo', 'Precio', 'Cantidad', 'Subtotal']);

	                $books = \Session::get('cart');
	                $data = [];
	                foreach ($books as $book) {
	                	$row = [];
	                	$row[0] = $book->isbn;
	                	$row[1] = $book->title;
	                	$row[2] = $book->price;
	                	$row[3] = $book->quantity;
	                	$row[4] = $book->quantity * $book->price;
	                	$data[] = $row;
	                }
	                $sheet->fromArray($data);

	            });
	        })->export('xls');
	 }

	public function sendmail (){
		$books = \Session::get('cart');
		return 'Enviando correo';
	 }
}


