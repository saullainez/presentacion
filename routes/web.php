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
Route::get('saul', function () {
    return view('saul');
})->name('saul');
Route::get('camarena', function () {
    return view('camarena');
})->name('camarena');
Route::get('gerardo', function () {
    return view('gerardo');
})->name('gerardo');
