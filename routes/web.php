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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    echo ("Nim   : 2041720040 <br>"); 
    echo ("Nama  : Muhammad Al Husein <br>"); 
    echo ("Kelas : TI2G");
});

Route::get('/article/{id}', function ($id= '1') {
    echo ("Ini adalah Halaman Artikel dengan ID " .$id);
});

Route::get('/article/{id}', function ($id= '2') {
    echo ("Ini adalah Halaman Artikel dengan ID ".$id);
});
