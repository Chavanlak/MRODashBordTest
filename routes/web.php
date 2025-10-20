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
Route::get('/technical', function () {
    return view('dashborad.technical');
});
Route::get('/store', function () {
    return view('dashborad.store');
});
Route::get('/store2', function () {
    return view('dashborad.store2');
});
Route::get('/admin', function () {
    return view('dashborad.admintecnicial');
});