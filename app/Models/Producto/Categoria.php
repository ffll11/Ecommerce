<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    protected $table = 'titemcategoria';

    protected $fillable = ['Categoria', 'EsOfrecido', 'Interno', 
    'CabeceraMenu', 'Orden', 'Ruta'];
    protected $primaryKey = 'Id';

    public $timestamps = false;

    //Tiene familias
    public function familias(){
        
        return $this->hasMany(Familia::class);
    }
}
