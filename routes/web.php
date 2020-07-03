<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang ";
});

Route::get('blog', function () {
	return view('blog');
});
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/tambah', 'PertanyaanController@tambah');
Route::post('/pertanyaan/store', 'PertanyaanController@store');


//Route::get('dosen', 'DosenController@index');
//Route::get('/pegawai/{nama}', 'PegawaiController@index');
//Route::get('/', 'PegawaiController@formulir');
//Route::post('/formulir/proses', 'PegawaiController@proses');

//Route::get('/blog', 'BlogController@home');
//route blog
//Route::get('/blog/tentang', 'BlogController@tentang');
//Route::get('/blog/kontak', 'BlogController@kontak');
//route CRUD
//Route::get('/pegawai','PegawaiController@index');
//Route::get('/pegawai/tambah','PegawaiController@tambah');
//Route::post('/pegawai/store','PegawaiController@store');
//Route::get('/pegawai/edit/{id}','PegawaiController@edit');

