<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\UserpageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   common resource routes 
        index - show all
        show - show single
        create - show form to create new
        store - store new
        edit - show form to edit
        update - update
        destroy - delete
*/



Route::get('/', [HomeController::class, 'index'])->name('home');
  
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/userpage', [UserpageController::class, 'index'])->name('userpage');
Route::post('/userpage', [UserpageController::class, 'store']);

Route::get('/product/{product:id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);

// Route::get('/recepttoevoegen', [ReceptController::class, 'index'])->name('receptToevoegen')->middleware('auth');
// Route::post('/recepttoevoegen', [ReceptController::class, 'store']);
