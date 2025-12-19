<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescripcionVegetacion extends Model
{

    use HasFactory;

    protected $table = 'descripcion_vegetacion';

    protected $fillable = ['vegetacion_id', 'descripcion'];

    public function vegetacion()
    {
        return $this->belongsTo(Vegetacion::class, 'vegetacion_id');
    }
    
}
