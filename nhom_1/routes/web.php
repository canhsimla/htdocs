<?php

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


Route::get('/home', function () {
    return view('home');
});
Route::get('/introduce', function () {
    return view('introduce');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/nhom1', function () {
    return view('nhom1');
});
Route::get('/name', function () {
    return view('name');
});
Route::get('/seach', function () {
    return view('seach');
});


Route::get('/admin', function () {
    return view('admin');
});
