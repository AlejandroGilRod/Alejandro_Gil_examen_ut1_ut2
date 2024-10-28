<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;

use function Laravel\Prompts\text;

class ControladorFormulario2 extends Controller{
    public function editarMensaje($id)
    {
        // Buscar la duda por ID
        $mensaje = Message::findOrFail($id);

        $mensaje->update([
            'text' => '<u>text</u>',
            
        ]);
        return redirect('/messages')->with('success', 'Duda actualizada con éxito.');
    }

    // Actualizar los datos de la duda


}