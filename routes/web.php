<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas Movimientos Tjvisa

Route::get('/movtjvisa', [App\Http\Controllers\MotionController::class, 'index']);

Route::get('/movtjvisa/create', [App\Http\Controllers\MotionController::class, 'create']);
Route::get('/movtjvisa/{motion}/edit', [App\Http\Controllers\MotionController::class, 'edit']);
Route::post('/movtjvisa', [App\Http\Controllers\MotionController::class, 'sendData']);