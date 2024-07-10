<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    
    protected $table = 'titemmarca';

    protected $fillable = ["Marca", "Origen", "Serie", "web",
    "Mercado", "Promocionar", "Principal", "Liquidacion",
    "MostrarPrecio", "UNQuimico"];
    protected $primaryKey="Id";

    public $timestamps = false;

    public function items() {
        return $this->hasMany(Item::class, 'marca_id', 'Id');
    }
}
