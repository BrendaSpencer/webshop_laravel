<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
