<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\CategoryController;
USE App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('medicines', MedicineController::class);
Route::resource('categories', CategoryController::class);
Route::get('/showlogin', [AuthController::class, 'showLoginForm'])->name('auth.showLoginForm');
Route::get('/showregister', [AuthController::class, 'showRegisterForm'])->name('auth.showRegisterForm');
route::post('/register', [AuthController::class, 'register'])->name('auth.register');
route::post('/login', [AuthController::class, 'login'])->name('auth.login');
route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');





