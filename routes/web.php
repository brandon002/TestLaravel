<?php

use App\Http\Controllers\booksController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('category');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/computer', function () {
    return view('computer');
});
Route::get('/science', function () {
    return view('science');
});
Route::get('/fiction', function () {
    return view('fiction');
});
Route::get('/detail', function () {
    return view('detail');
});
//Route::get('/home', [detailsController::class, 'printBook']);
//Route::get('/home', 'App\Http\Controllers\detailsController@printBook');