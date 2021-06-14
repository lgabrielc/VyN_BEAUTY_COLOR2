<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CitasController;

Route::get('/', function () {
    return view('principal');
});
Route::get('ReservarCita', [CitasController::class, 'index'] )->name('citas.index');

Route::get('ReservarCita/Create', [CitasController::class, 'create'] )->name('citas.create');

Route::post('ReservarCita', [CitasController::class, 'store'] )->name('citas.store');

Route::get('ReservarCita/Show', [CitasController::class, 'show'] )->name('citas.show');

Route::get('/index', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('index');

Auth::routes();