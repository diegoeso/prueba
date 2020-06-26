<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Prueba 5
        </title>
    </head>
    <body>
        <h3>
            Gasolinera
        </h3>
        <form action="{{ route('prueba5') }}" method="post">
            @csrf
            <select id="tipo" name="tipo">
                <option value="1">
                    Litros a comprar
                </option>
                <option value="2">
                    Cantidad a comprar
                </option>
            </select>
            <input name="cantidad" type="text">
            </input>
            <input type="submit" value="Enviar">
            </input>
        </form>
        @if (Session::has('mensaje'))
        	{{ Session::get('mensaje') }}
        @endif
    </body>
</html>