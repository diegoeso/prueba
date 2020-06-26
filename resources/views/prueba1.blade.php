<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Ejercicio 1
        </title>
    </head>
    <body>
        <form action="{{ route('prueba1') }}">
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