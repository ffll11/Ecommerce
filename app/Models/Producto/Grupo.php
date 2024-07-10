<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'titemgrupo';
    
    protected $fillable = ['Descuento', 'Leyenda', 'Visible', 
    'Tasa', 'OfertaWeb', 'DctoMax', 'DctoReventa', 'DctoTiendaV',
    'Vigente', 'Vigencia', 'ParaCliente', 'MercadoLibre', 'Saga',
    'MLSugerido', 'PaseDeMano'];
    protected $primaryKey = 'Id';

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }
}