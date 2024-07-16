<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\FamiliaController;
use App\Http\Controllers\Admin\SubfamiliaController;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {

    return view('admin.dashboard');

})->name('dashboard');


Route::resource('familias',FamiliaController::class);
Route::resource('subfamilias',SubfamiliaController::class);
Route::resource('categorias',CategoriaController::class);