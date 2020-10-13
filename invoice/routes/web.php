<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerinvoicescontroller;

use App\Http\Controllers\HomeController;

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
   return view('/auth/login');
});


Route::get('/auth/login',[App\Http\Controllers\HomeController::class,'login']);
Route::get('/list',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('viewlist/{id}',[customerinvoicescontroller::class,'viewlist']);
Route::view('/create','create');
Route::post('/create',[customerinvoicescontroller::class,'createlist']);
Route::get('/edit/{id}',[customerinvoicescontroller::class,'edit']);
Route::post('/update',[customerinvoicescontroller::class,'update']);
Route::get('/delete/{id}',[customerinvoicescontroller::class,'delete']);
Route::get('/pdf/{id}',[customerinvoicescontroller::class,'pdf']);
//Route::get('/pdf/{id}',[customerinvoicescontroller::class,'download']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

