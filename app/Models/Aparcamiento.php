<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparcamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'nombre',
        'descripcion',
        'plazas',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
}
