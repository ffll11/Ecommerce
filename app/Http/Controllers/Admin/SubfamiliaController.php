<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto\Subfamilia;
use Illuminate\Http\Request;

class SubfamiliaController extends Controller
{
    public function index(){

        $subfamilias = Subfamilia::paginate();
        return view('admin.subfamilias.index',compact('subfamilias'));
    }
    public function create(){

    }

    public function show(Subfamilia $subfamilia){

    }

    public function edit(Subfamilia $subfamilia) {

    }

    public function update(Request $request ,Subfamilia $subfamilia) {
        
    }

    public function store(Subfamilia $subfamilia){

    }

    public function destroy(Subfamilia $subfamilia){

    }
}
