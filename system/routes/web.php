<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;


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


Route::get('beranda',[HomeController:: class,'showBeranda']);
Route::get('blog',[HomeController:: class,'showBlog']);
Route::get('about',[HomeController:: class,'showAbout']);
Route::get('kontak',[HomeController:: class,'showKontak']);
Route::get('berita',[HomeController:: class,'showBerita']);


Route::get('showartikel',[ArtikelController:: class,'showartikel']);
Route::get('login',[AuthController:: class,'showLogin']);
Route::post('login',[AuthController:: class,'loginProcess'])->name('login');
Route::get('logout',[AuthController:: class,'logout']);


Route::prefix('admin')->middleware('auth')->group(function(){
		Route::post('blog/filter', [BlogController:: class, 'filter']);
		Route::get('blog',[BlogController:: class,'index']);
		Route::get('blog/create',[BlogController:: class,'create']);
		Route::post('blog',[BlogController:: class,'store']);
		Route::get('blog/{blog}',[BlogController:: class, 'show']);
		Route::get('blog/{blog}/edit',[BlogController:: class, 'edit']);
		Route::put('blog/{blog}',[BlogController:: class, 'update']);
		Route::delete('blog/{blog}',[BlogController:: class, 'destroy']);

		Route::get('user',[UserController:: class,'index']);
		Route::get('user/create',[UserController:: class,'create']);
		Route::post('user',[UserController:: class,'store']);
		Route::get('user/{user}',[UserController:: class, 'show']);
		Route::get('user/{user}/edit',[UserController:: class, 'edit']);
		Route::put('user/{user}',[UserController:: class, 'update']);
		Route::delete('user/{user}',[UserController:: class, 'destroy']);
	});

Route::get('artikel',[ArtikelController:: class,'showArtikel']);
Route::get('blog',[BlogController:: class,'index']);
Route::get('blog/{blog}',[BlogController:: class, 'show']);
