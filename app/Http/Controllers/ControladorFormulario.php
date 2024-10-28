<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;

use function Laravel\Prompts\text;

class ControladorFormulario extends Controller{
    public function editarMensaje($id)
    {
        // Buscar la duda por ID
        $mensaje = Message::findOrFail($id);

        $mensaje->update([
            'text' => '<b>text</b>',
            
        ]);
        return redirect('/messages')->with('success', 'Duda actualizada con éxito.');
    }

    // Actualizar los datos de la duda


}