<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class,'index'])->name('home');

Route::get('/login', [AuthController::class,'createLogin'])->name('login');

Route::post('/login', [AuthController::class,'storeLogin'])->name('login');

Route::post('/logout', [AuthController::class,'destroyLogin'])->name('logout');

Route::get('/register', [AuthController::class,'createRegister'])->name('register');

Route::post('/register', [AuthController::class,'storeRegister'])->name('register');

Route::get('/add-product', [ProductController::class,'create'])->name('add-product');

Route::post('/add-product', [ProductController::class,'store'])->name('add-product');



