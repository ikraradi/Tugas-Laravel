<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/programming-languages', function () {
    $languages = ['php', 'java', 'c', 'javascript', 'dart'];
    return response()->json($languages);
});

Route::get('/table', function(){
    $barang = ['Meja', 'Kursi', 'Lampu', 'Papan Tulis'];
});

Route::middleware(['checkUsers'])->group(function () {
    Route::resource('posts', PostController::class);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
