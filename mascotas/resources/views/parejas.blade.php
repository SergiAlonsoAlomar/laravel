<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parejas</title>
</head>
<body>
    <h1>Bienvenido/a Mascota {{ $user->nombre }}</h1>
    <table>
        <thead>
            <tr>
                <th>Nom de la possible parella</th>
                <th>Edat</th>
                <th>Color</th>
                <th>Nom del seu humà</th>
                <th>Telèfon del seu humà</th>
                <th>Fotos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parejas as $pareja)
                <tr>
                    <td>{{ $pareja->nombre }}</td>
                    <td>{{ $pareja->edad }}</td>
                    <td>{{ $pareja->color }}</td>
                    <td>{{ $pareja->nombreHumano }}</td>
                    <td>{{ $pareja->telefono }}</td>
                    <td><a href="{{ route('foto', $pareja->id) }}">Ver Foto</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>