<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses'])->name('login.proses');

Route::middleware([AuthMiddleware::class])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('pegawai', PegawaiController::class);
    Route::resource('jabatan', JabatanController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});