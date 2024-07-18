<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto\Categoria;
use App\Models\Producto\Familia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class FamiliaController extends Controller
{
    public function index(){

        $familias = Familia::orderBy('Id','desc')
        ->with('categoria')
        ->paginate(10);
        return view('admin.familias.index',compact('familias'));
    }

    public function create(){

        $categorias = Categoria::all();
        return view('admin.familias.create',compact('categorias'));

    }
    public function store(Request $request){
        $request->validate([
            'Categoria_id' => 'required|exists:titemcategoria,Id',
            'Familia' => 'required'
        ]);

        Familia::create($request->all());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Bien hecho',
            'text' => 'Familia creada exitosamente'
        ]);

        return redirect()->route('admin.familias.index');
    }


    public function edit(Familia $familia) {
        $categorias = Categoria::all();

        return view('admin.familias.edit',compact(['categorias','familia']));

    }

    public function update(Request $request ,Familia $familia) {

        $request->validate([
            'categoria_id' => 'required|exists:titemcategoria,Id',
            'Familia' =>'required'
        ]);

        $familia->update($request->all());

        session()->flash('swal',[
            'icon' => 'success',
            'title' => "¡Bien hecho!",
            'text' => 'Familia actualizada exitosamente'
        ]);

        return redirect()->route('admin.familias.index',$familia);

    }

    public function destroy(Familia $familia){
        if($familia->subfamilias->count()>0){

            session()->flash('swal',[
                'icon' => 'error',
                'title' => "¡Ups!",
                'text' => 'No se puede eliminar la familia porque tiene subcategorias asociadas'
            ]);

            return redirect()->route('admin.familias.edit',$familia);
           }

            $familia->delete();

            session()->flash('swal',[
                'icon' => 'success',
                'title' => "¡Bien hecho!",
                'text' => 'Familia eliminada exitosamente'
            ]);

            return redirect()->route('admin.familias.index');
    }
}
