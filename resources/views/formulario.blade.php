<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de examen</title>
</head>
<body>

  
    <h1>Formulario de Dudas - 2º DAW</h1>
    <form method="post" action="{{ route('registrar.mensaje') }}">
        @csrf





        <label for="texto">Mensaje:</label><br>
        <input type="text" id="texto" name="texto" value="{{ old('texto', $message->text) }}" required><br><br>

        <fieldset>
            <label><input type="checkbox" name="negrita" value="Negrita"> Negrita</label><br>

        </fieldset>
        <fieldset>
        <label><input type="checkbox" name="subrayado" value="Subrayado"> Subrayado</label><br>

        </fieldset>

        <input type="submit" value="Enviar" >

    </form>
    <div>
            <a href="{{ url('/messages') }}">
                <button>Mostrar mensajes</button>
            </a>
        </div>
    </div>


</body>
</html>