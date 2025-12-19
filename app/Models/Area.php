<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'imagen', 'descripcion_breve', 'descripcion', 'mapa', 'descripcion_aparcamientos'
    ];

    public function vegetaciones()
    {
        return $this->belongsToMany(Vegetacion::class, 'area_vegetacion', 'area_id', 'vegetacion_id');
    }

    public function aparcamientos()
    {
        return $this->hasMany(Aparcamiento::class);
    }

    
}
