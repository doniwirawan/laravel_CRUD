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


// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');















// Route::get('about', function () {
//     return view('about');
// });


// Route::get('halo', function () {
//     return ('ini halo');
// });

// Route::get('dosen', 'DosenController@index');
// Route::get('/formulir', 'PegawaiController@formulir');
// Route::get('/formulir/proses', 'PegawaiController@proses');
