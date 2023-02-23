<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\Artikel;
use App\Http\Controllers\Reservasi;
use App\Http\Controllers\About;
use App\Http\Controllers\User;

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
Route::get('/',[Home::class,'index']);
Route::get('/dashboard', [Dashboard::class,'index']);

//Route User
Route::get('/user',[User::class,'index']);
Route::get('/user/add',[User::class,'create']);
Route::post('/user/add',[User::class,'store']);
Route::get('/user/edit/{id}',[User::class,'edit']);
Route::post('/user/edit/{id}',[User::class,'update']);
Route::get('/user/delete/{id}',[User::class,'destroy']);

//Route Pages
Route::get('/pages',[Pages::class,'index']);
Route::get('/pages/add',[Pages::class,'create']);
Route::post('/pages/add',[Pages::class,'store']);
Route::get('/pages/edit/{id}',[Pages::class,'edit']);
Route::post('/pages/edit/{id}',[Pages::class,'update']);
Route::get('/pages/delete/{id}',[Pages::class,'destroy']);

//Route Jadwal
Route::get('/jadwal',[Jadwal::class,'index']);
Route::get('/jadwal/add',[Jadwal::class,'create']);
Route::post('/jadwal/add',[Jadwal::class,'store']);
Route::get('/jadwal/edit/{id}',[Jadwal::class,'edit']);
Route::post('/jadwal/edit/{id}',[Jadwal::class,'update']);
Route::get('/jadwal/delete/{id}',[Jadwal::class,'destroy']);

//Route Artikel
Route::get('/artikel',[Artikel::class,'index']);

//Route Reservvasi
Route::get('/reservasi',[Reservasi::class,'index']);
Route::post('/reservasi',[Reservasi::class,'store']);

//Route About
Route::get('/about',[About::class,'index']);

//Route Profile
Route::get('/profile',[ProfileController::class,'index']);



require __DIR__.'/auth.php';
