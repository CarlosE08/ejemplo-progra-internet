<?php

namespace App\Http\Controllers;

use App\models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contactoForm($tipo = 'Otro')
    {
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
        $request->validate([
            /*se declaran las reglas de validación*/ 
            'correo' => 'required|email',
            'comentario' => ['required','min:10', 'max:50'],
    
        ]);

        $contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();

        return redirect('/contacto');

    }
}
