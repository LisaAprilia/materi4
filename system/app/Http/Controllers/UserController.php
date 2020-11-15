<?php 

namespace App\Http\Controllers;
use App\Models\Produk;


class UserController extends Controller{

	function homeIndex(){
		$data['list_produk'] = produk::all();
		return view ('home', $data);

	}


}