<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $table = 'titemfamilia';

    protected $fillable = ['Categoria_id', 'Familia', 'Publicar', 'Enlace'];
    protected $primaryKey = 'Id';

    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Categoria_id', 'Id');
    }

    public function subfamilias()
    {
        return $this->hasMany(Subfamilia::class);
    }
}
