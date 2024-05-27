<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/sampahku', function () {
    return view('sampahku.index');
});
Route::get('/sampahku/create', function () {
    return view('sampahku.create');
});
Route::get('/sampahku/update', function () {
    return view('sampahku.update');
});
Route::get('/sampahku/detail', function () {
    return view('sampahku.detail');
});
