<?php

use App\Models\pegawai;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pegawai', App\Http\Controllers\PegawaiController::class);
Route::resource('bagian', App\Http\Controllers\BagianController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
