<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Document
        </title>
    </head>
    <body>
        <form action="{{ route('prueba2') }}">
            <label for="">
                Introduce un numero
            </label>
            <input id="numero" name="numero" type="text">
            </input>
            <button type="submit">
                Enviar
            </button>
        </form>
    </body>
</html>