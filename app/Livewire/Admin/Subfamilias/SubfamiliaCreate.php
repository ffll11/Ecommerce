<?php

namespace App\Livewire\Admin\Subfamilias;

use App\Models\Producto\Familia;
use App\Models\Producto\Categoria;

use Livewire\Component;
use Livewire\Attributes\Computed;
class SubfamiliaCreate extends Component
{
    //Obtenemos todas las categorias
    public $categorias;
    public $subfamilia = [
        'Categoria_id' => '',
        'Familia_id' => '',
        'Subfamilia' => '',

    ];
    public function mount(){
        $this->categorias = Categoria::all();
    }

   public function updatedSubfamiliaCategoriaId(){
        $this->subfamilia['Familia_id'] = '';
   }
    //Queremos que  comporte como una propiedad
    #[Computed()]
    public function getFamiliasProperty(){

        return Familia::where('Categoria_id',$this->subfamilia['Categoria_id'])->get();

    }

    public function render()
    {
        return view('livewire.admin.subfamilias.subfamilia-create');
    }
}
