<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('beranda1');
});

Route::get('/pesanan', function () {
    return view('pesanan1');
});

Route::get('/transaksi', function () {
    return view('transaksii');
});

Route::get('/pencarian', function () {
    return view('pencariann');
});

Route::get('/menu', function () {
    return view('menu1');
});

Route::get('/deskripsimenu', function () {
    return view('deskripsimenu');
});