<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;  // Importa el modelo Area
use App\Models\Vegetacion;
use app\Models\DescripcionVegetacion;



class MapeadoAlmussafesController extends Controller
{

    /** Vista con el listado de áreas */
    public function showMapeadoAlmussafes(){

        // Obtener todas las áreas desde la base de datos
        $areas = Area::all();

        // Pasar la colección a la vista
        return view('mapeadoalmussafes', compact('areas'));
        
    }


    /** Vista de detalle de un área */
    public function showArea($id){
        
        // Buscar el área
        $area = Area::find($id);

        if (!$area) {
            return redirect()
                ->route('mapeado')
                ->with('error', 'El área solicitada no existe.');
        }

        $vegetaciones = Vegetacion::whereIn('id', function($query) use ($id) {
            $query->select('vegetacion_id')
                ->from('area_vegetacion')
                ->where('area_id', $id);
        })->with('descripciones')->get();

        // Pasar área y vegetaciones a la vista
        return view('showarea', compact('area', 'vegetaciones'));

    }



}
