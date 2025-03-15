<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');


// Route untuk Level
Route::get('/level', [LevelController::class, 'index']);

// Route untuk User
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/tambah', [UserController::class, 'tambah']);
    Route::post('/tambah_simpan', [UserController::class, 'tambah_simpan']);
    Route::get('/ubah/{id}', [UserController::class, 'ubah']);
    Route::post('/ubah_simpan', [UserController::class, 'ubah_simpan']);
    Route::get('/hapus/{id}', [UserController::class, 'hapus']);
});

// Authentication Routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
