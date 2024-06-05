<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StrukController;



Route::get('/menu/struk', function () {
    return view('Struk1');
});

Route::get('/menu/welcome', [MenuController::class,'index']);

Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu', [MenuController::class, 'store']);

Route::get('/menu/makanan', [MenuController::class, 'showMakanan']);
Route::get('/menu/minuman', [MenuController::class, 'showMinuman']);

Route::get('/menu/{id_menu}', [MenuController::class,'showDetail'])->name('menu.detail');

Route::post('/tambah-pesanan', [StrukController::class, 'tambahPesanan']);
