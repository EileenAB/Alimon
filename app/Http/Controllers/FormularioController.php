<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('sitio.pages.preguntas');
    }

    public function enviarCorreo(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pregunta' => 'required|string',
        ]);

        // Enviar correo electrónico con los datos del formulario
        Mail::to('alimon.nutricion.preguntas@gmail.com')->send(new EnviarCorreo($request->nombre, $request->email, $request->pregunta));

        // Redireccionar con un mensaje de éxito
        return redirect('/formulario')->with('success', '¡Tu duda ha sido enviada!');
    }
}
