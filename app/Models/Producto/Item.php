<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'titem';

    protected $fillable = ['subfamilia_id', 'tipo_id', 'marca_id',
    'grupo_id', 'unidad_id', 'pais_id', 'moneda_id', 'identificador_fk',
    'Modelo', 'CodInterno', 'Descripcion', 'DescripOriginal', 'Medida',
    'PrecioL', 'PrecioV', 'PrecioC', 'Oferta', 'PrecioLiq', 'Dcto',
    'Dcto2', 'Peso', 'Actualizado', 'EnWeb', 'Promocional',
    'TieneFichaT', 'TieneExtension', 'Catalogo', 'Descontinuado',
    'Vender', 'Ubicacion', 'Stock', 'Separado', 'APedir', 'Pedido',
    'Stock_Ideal', 'Presentacion', 'MasterPack', 'fichaT',
    'CodUniversal', 'Imagen', 'EnMercadoLibre', 'Largo', 'Alto',
    'Ancho', 'Peso_empacado', 'Cantidad_Presentacion'];
    protected $primaryKey = 'Id';
    
    public $timestamps = false;

    public function subfamilia(){
        return $this->belongsTo(Subfamilia::class, 'subfamilia_id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }

    public function marca(){
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    public function unidad(){
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }

    public function pais(){
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function moneda(){
        return $this->belongsTo(Moneda::class, 'moneda_id');
    }
}

