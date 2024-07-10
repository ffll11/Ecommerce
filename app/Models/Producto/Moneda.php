<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    use HasFactory;

    protected $table = 'tmoneda';
    
    protected $fillable = ["Moneda","Abrev","NCorto"];
    protected $primaryKey="Id";

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::class);
    }
}
