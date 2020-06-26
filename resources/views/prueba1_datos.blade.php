<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Document
        </title>
    </head>
    <body>
        <h3>
            Numero primos
        </h3>
        <ul>
            @foreach ($data as $num)
            <li>
                {{ $num }}
            </li>
            @endforeach
        </ul>
    </body>
</html>