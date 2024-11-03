<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::as('siswa.')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'tampil'])->name('tampil');

    Route::middleware('auth')->group(function() {
        Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('tambah');
        Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('submit');
        Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
        Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('update');
        Route::post('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('delete');
    });
});


Route::middleware('guest')->group(function () {
    Route::as('registrasi.')->group(function () {
        Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('tampil');
        Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('submit');
    });

    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
