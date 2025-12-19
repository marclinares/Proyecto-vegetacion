<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetacion extends Model
{
    use HasFactory;

    protected $table = 'vegetaciones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
    ];

    // Relación muchos a muchos con Area
    public function areas()
    {
        return $this->belongsToMany(Area::class, 'area_vegetacion', 'vegetacion_id', 'area_id');

    }

    public function descripciones()
    {
        return $this->hasMany(DescripcionVegetacion::class, 'vegetacion_id');
    }
}
