<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'titemtipo';
    
    protected $fillable = ["Tipo", "Adicional", "Tecnologia","Baterias"];
    protected $primaryKey="Id";

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }
}