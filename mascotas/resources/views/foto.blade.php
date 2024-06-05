<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Foto de {{ $pareja->nombre }}</title>
    </head>
    <body>
        <h1>Bienvenido/a Mascota {{ $user->nombre }}</h1>
        <img src="{{ asset( $pareja->foto) }}" alt="Foto de {{ $pareja->nombre }}">
        <a href="{{ route('parejas') }}">Volver a Parejas</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    </body>
</html>