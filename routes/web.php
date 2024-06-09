<?php

use App\Http\Controllers\LaporanController;
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


Route::get('/dashboard', [LaporanController::class, 'dashboard'])->name('sampahku.dashboard');
Route::get('/sampahku', [LaporanController::class, 'index'])->name('sampahku.index');
Route::get('/sampahku/create', [LaporanController::class, 'create'])->name('sampahku.create');
Route::post('/sampahku/create', [LaporanController::class, 'store'])->name('sampahku.store');
Route::get('/sampahku/detail/{id}', [LaporanController::class, 'detail'])->name('sampahku.detail');
Route::get('/sampahku/edit/{id}', [LaporanController::class, 'edit'])->name('sampahku.edit');
Route::put('/sampahku/edit/{id}', [LaporanController::class, 'update'])->name('sampahku.update');
Route::delete('/sampahku/{id}', [LaporanController::class, 'destroy'])->name('sampahku.destroy');
