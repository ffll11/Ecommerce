<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto\Categoria;
class CategoriaController extends Controller
{
    public function index(){

        return view('admin.categorias.index');
    }
    public function create(){

    }

    public function show(Categoria $categoria){

    }

    public function edit(Categoria $categoria) {

    }

    public function update(Request $request ,Categoria $categoria) {
        
    }

    public function store(Categoria $categoria){

    }

    public function destroy(Categoria $categoria){

    }
}
