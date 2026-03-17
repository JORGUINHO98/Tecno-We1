<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio']);

Route::get('/acerca', function () {
    return "<h1>Acerca de nosotros</h1>";
});


use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


