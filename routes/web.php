<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/index', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('index');

Auth::routes();
