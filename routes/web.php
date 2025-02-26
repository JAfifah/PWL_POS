<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/insert', [KategoriController::class, 'insert']);
Route::get('/kategori/update', [KategoriController::class, 'update']);
Route::get('/kategori/delete', [KategoriController::class, 'delete']);
