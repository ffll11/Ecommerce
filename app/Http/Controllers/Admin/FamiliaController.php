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

        $familias = Familia::orderBy('Id','desc')->paginate(10);
        return view('admin.familias.index',compact('familias'));
    }

    public function create(){

        $categorias = Categoria::orderBy('Id','desc')->all();
        return view('admin.familias.create',compact('categorias'));

    }
    public function store(Request $request){
        $request->validate([

            'Familia' => 'required'
        ]);

        Familia::create($request->all());
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Bien hecho',
            'text' => 'Familia creada exitosamente'
        ]);

        return redirect()->route('admin.categorias.index');
    }



    public function show(Familia $familia){

    }

    public function edit(Familia $familia) {

        return view('admin.familias.edit',compact('familias'));


    }

    public function update(Request $request ,Familia $familia) {

        $request->validate([
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
        if($familia->categoria->count()>0){

            session()->flash('swal',[
                'icon' => 'error',
                'title' => "¡Ups!",
                'text' => 'No se puede eliminar la familia porque tiene categorias asociadas'
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
