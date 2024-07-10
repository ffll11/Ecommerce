<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'titemunidad';
    
    protected $fillable = ["Unidad", "Sigla", "Rapifact"];
    protected $primaryKey="Id";

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }
}
