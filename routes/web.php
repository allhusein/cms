<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanHome;
use App\Http\Controllers\HalamanNews;
use App\Http\Controllers\HalamanProducts;
use App\Http\Controllers\HalamanProgram;
use App\Http\Controllers\HalamanAboutUs;

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

//Route::get('/', function () {
 //   echo "Hi! Selamat Datang di Website Laravel";
//});

//Route::get('/about', function () {
 //   echo ("Nim   : 2041720040 <br>"); 
  //  echo ("Nama  : Muhammad Al Husein <br>"); 
  //  echo ("Kelas : TI2G");
//});

//Route::get('/article/{id}', function ($id= '1') {
 //   echo ("Ini adalah Halaman Artikel dengan ID " .$id);
//});

//Route::get('/article/{id}', function ($id= '2') {
//    echo ("Ini adalah Halaman Artikel dengan ID ".$id);
//});

/*
Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/about','App\Http\Controllers\AboutController@about');

Route::get('/articles/{id}','App\Http\Controllers\ArticleController@articles'); */


// Route::get('/', [HalamanHome::class,'index']);

// Route::prefix('Products')->group(function(){
//       Route::get('/edu','App\Http\Controllers\HalamanProducts@edu');
//       Route::get('/Friends-edu',[ProdiController::class , 'friends']);
//       Route::get('/Story-books',[ProdiController::class , 'books']);
//       Route::get('/Kids-song',[ProdiController::class , 'song']);
// });

// Route::prefix('news') -> group(function () {
//   Route::get("", function () {
//       echo " ini Page NEWS";
//   });
  
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function(){
//   return view('home');
// });

// Route::get('/about',function(){
//   return view('about');
// });


// Route::get('/product',function(){
//   return view('product');
// });


// Route::get('/contact',function(){
//   return view('contact');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
