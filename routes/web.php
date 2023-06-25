<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ShoppingController;
//import java.io.* ;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('jancok', function () {
    return view('welcome');
}); //hanya cocok untuk simple redirect

//Route::get('halo', function () {
	//return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com</marquee>";
//});

//Route::get('blog', function () {
	//return view('blog');
//});
//konsep MVC dan routing
//Route::get('dosen', '\App\Http\Controllers\DosenController@index');
//Route::get('/pegawai/{nama}', '\App\Http\Controllers\PegawaiController@index');
//Route::get('/formulir', '\App\Http\Controllers\PegawaiController@formulir');
//Route::post('/formulir/proses', '\App\Http\Controllers\PegawaiController@proses');

Route::controller(DosenController::class)->group(function () {
    Route::get('dosen', 'index');
});

Route::controller(PegawaiController::class)->group(function () {
    Route::get('/pegawainama/{nama}', 'index');
    Route::get('/formulir', 'formulir');
    Route::post('/formulir/proses', 'proses');
});

// route blog
// Route::get('/blog', 'BlogController@home');
// Route::get('/blog/tentang', 'BlogController@tentang');
// Route::get('/blog/kontak', 'BlogController@kontak');

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'home');
    Route::get('/blog/tentang', 'tentang');
    Route::get('/blog/kontak', 'kontak');
});

//Route::get('/pegawai','PegawaiController@index');
Route::controller(PegawaiDBController::class)->group(function () {
    Route::get('/pegawai', 'index');
    Route::get('/pegawai/tambah', 'tambah');
    Route::post('/pegawai/store', 'store');
    Route::get('/pegawai/edit/{id}', 'edit');
    Route::post('/pegawai/update', 'update');
    Route::get('/pegawai/hapus/{id}', 'hapus');
    Route::get('/pegawai/cari','cari');
    Route::get('/pegawai/view/{id}', 'view');
});

Route::controller(NilaiController::class)->group(function () {
    Route::get('/nilai', 'index');

});

Route::controller(ShoppingController::class)->group(function () {
    Route::get('/shopping', 'index');
    Route::get('/shopping/beli', 'beli');
    Route::post('/shopping/store', 'store');
    Route::get('/shopping/batal/{id}', 'batal');
});

// Route::get('/pegawai/tambah','PegawaiController@tambah');
// Route::post('/pegawai/store','PegawaiController@store');
// Route::get('/pegawai/edit/{id}','PegawaiController@edit');
// Route::post('/pegawai/update','PegawaiController@update');
// Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
