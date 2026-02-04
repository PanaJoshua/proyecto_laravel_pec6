<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('registro', [RegistroController::class, 'showForm'])->name('registro');
Route::post('registro', [RegistroController::class, 'register']);

Route::get('login', [LoginController::class, 'loginForm'])->name('login')->middleware(['guest']);
Route::post('login', [LoginController::class, 'login'])->middleware(['guest']);
Route::get('logout',[LoginController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::resource('/libros', LibroController::class);