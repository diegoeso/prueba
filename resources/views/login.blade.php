<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            Login
        </title>
    </head>
    <body>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        <div class="alert alert-warning">
            @if (Session::has('estatus'))
        		{{ Session::get('estatus') }}
        	@endif
        </div>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input id="email" name="email" type="text"/>
            <input id="password" name="password" type="password"/>
            <button type="submit">
                Enviar
            </button>
        </form>
    </body>
</html>
