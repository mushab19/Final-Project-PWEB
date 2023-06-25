<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    public function index() //Nama method bebas
    {
    	// mengambil data dari table pegawai
    	$shoppingchart = DB::table('shoppingchart')->get();

    	// mengirim data pegawai ke view index
    	return view('indexShopping',['shoppingchart' => $shoppingchart]);

    }
    public function beli()
    {

	// memanggil view tambah
	return view('beli');

    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('shoppingchart')->insert([
		'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->JumlahPembelian,
		'Harga' => $request->Harga,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/shopping');

    }
    public function batal($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('shoppingchart')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/shopping');
    }
}

