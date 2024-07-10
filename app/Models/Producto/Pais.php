<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'tpais';

    protected $fillable = ["NCorto", "Pais", "Prioridad", "Inicio"];
    protected $primaryKey="Id";
    
    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }
}
