<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/programming-languages', function () {
    $languages = ['php', 'java', 'c', 'javascript', 'dart'];
    return response()->json($languages);
});

Route::get('/table', function(){
    $barang = ['Meja', 'Kursi', 'Lampu', 'Papan Tulis'];
});