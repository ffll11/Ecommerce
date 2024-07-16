<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto\Categoria;
class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::orderBy('Id','desc')->paginate(10);

        return view('admin.categorias.index',compact('categorias'));
    }
    public function create(){
        return view('admin.categorias.create');
    }

    public function store(Request $request){
        $request->validate([
            'Categoria' => 'required'
        ]);

        Categoria::create( $request->all());
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Bien hecho',
            'text' => 'Categoria creada exitosamente'
        ]);
        return redirect()->route('admin.categorias.index');
    }

    public function show(Categoria $categoria){

    }

    public function edit(Categoria $categoria) {


        return view('admin.categorias.edit',compact('categoria'));

    }

    public function update(Request $request ,Categoria $categoria) {
        $request->validate([
            'name' =>'required'
        ]);

        $categoria->update($request->all());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => "¡Bien hecho!",
            'text' => 'Categoria actualizada exitosamente'
        ]);

        return redirect()->route('admin.categorias.index',$categoria);

    }

    public function destroy(Categoria $categoria){
       if($categoria->familias->count()>0){

        session()->flash('swal',[
            'icon' => 'error',
            'title' => "¡Ups!",
            'text' => 'No se puede eliminar la categoria porque tiene familias asociadas'
        ]);

        return redirect()->route('admin.categorias.edit',$categoria);
       }

        $categoria->delete();

        session()->flash('swal',[
            'icon' => 'success',
            'title' => "¡Bien hecho!",
            'text' => 'Categoria eliminada exitosamente'
        ]);

        return redirect()->route('admin.categorias.index');
    }
}
