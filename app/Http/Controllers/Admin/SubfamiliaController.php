<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto\Subfamilia;
use App\Models\Producto\Familia;

use Illuminate\Http\Request;

class SubfamiliaController extends Controller
{
    public function index(){

        $subfamilias = Subfamilia::with('familia.categoria')
        ->paginate(10);
        return view('admin.subfamilias.index',compact('subfamilias'));
    }
    public function create(){

        $familias = Familia::all();

        return view('admin.subfamilias.create',compact('familias'));
    }

    public function store(Request $request){

        $request->validate([
            'Familia_id' => 'required|exists:titemfamilia,Id',
            'Subfamilia' => 'required',
        ]);

        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Bien hecho',
            'text' => 'Subfamilia creada exitosamente'
        ]);

        Subfamilia::create($request->all());

        return redirect()->route('admin.subfamilias.index');
    }


    public function edit(Subfamilia $subfamilia) {

        $familias = Familia::all();

        return view('admin.subfamilias.edit',compact(['familias','subfamilia']));

    }

    public function update(Request $request ,Subfamilia $subfamilia) {

        $request->validate([
            'Familia_id' => 'required|exists:titemfamilia,Id',
            'Subfamilia' =>'required'
        ]);

        $subfamilia->update($request->all());
        session()->flash('swal',[
            'icon' => 'success',
            'title' => 'Bien hecho',
            'text' => 'Subfamilia actualizada exitosamente'
        ]);

        return redirect()->route('admin.subfamilias.index');

    }


    public function destroy(Subfamilia $subfamilia){

        if($subfamilia->items->count() > 0){

            session()->flash('swal',[
                'icon' => 'error',
                'title' => "¡Ups!",
                'text' => 'No se puede eliminar la subfamilia porque tiene productos asociadas'
            ]);

            return redirect()->route('admin.subfamilias.index',$subfamilia);
        }

        $subfamilia->delete();

        session()->flash('swal',[
            'icon' => 'success',
            'title' => "¡Bien hecho!",
            'text' => 'Subfamilia eliminada exitosamente'
        ]);

        return redirect()->route('admin.subfamilias.index');

    }
}
