<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subfamilia extends Model
{
    use HasFactory;

    protected $table = 'titemsubfamilia';

    protected $fillable = ['Familia_id', 'Producto', 'Subfamilia', 'Vender', 'Otro',
    'UN', 'FichasT', 'Enlace', 'Productos', 'EnRed'];
    protected $primaryKey = 'Id';

    public $timestamps = false;

    public function familia()
    {
        return $this->belongsTo(Familia::class, 'Familia_id', 'Id');
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
