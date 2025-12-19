<?php

namespace App\Http\Controllers;

use App\Models\Sugerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SugerenciaMail;

class SugerenciaController extends Controller
{

    // public function store(Request $request) {
    //     // ✅ Validar datos
    //     $validated = $request->validate([
    //         'nombre' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'mensaje' => 'required|string',
    //     ]);

    //     // ✅ Guardar en la base de datos
    //     $sugerencia = Sugerencia::create($validated);

    //     // ✅ Enviar correo al email de sugerencias
    //     Mail::raw(
    //         "Nueva sugerencia recibida:\n\nNombre: {$validated['nombre']}\nEmail: {$validated['email']}\nMensaje:\n{$validated['mensaje']}",
    //         function ($message) {
    //             $message->to('marclinesp2002@gmail.com')
    //                     ->subject('Nueva sugerencia recibida');
    //         }
    //     );

    //     return redirect()->back()->with('success', '¡Gracias por tu sugerencia!');
    // }

    public function store(Request $request)
    {
        $sugerencia = Sugerencia::create($request->only('nombre', 'email', 'mensaje'));

        Mail::to('marclinesp2002@gmail.com')->send(new SugerenciaMail($sugerencia));

        return redirect()->back()->with('success', '¡Gracias por tu sugerencia!');
    }

}