<?php

use App\Http\Controllers\Admin\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {

    return view('admin.dashboard');

})->name('dashboard');

Route::resource('categorias',CategoriaController::class);