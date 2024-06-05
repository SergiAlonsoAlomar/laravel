<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
    </head>
    <body>
        <h1>Registro de Mascota</h1>
        <form method="POST" action="{{ route('registro') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nick">Nick:</label>
                <input type="text" name="nick" id="nick" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div>
                <label for="raza">Raza:</label>
                <select name="raza" id="raza" required>
                    <option value="Boxer">Boxer</option>
                    <option value="Buldog">Buldog</option>
                    <option value="Labrador">Labrador</option>
                    <option value="Caniche">Caniche</option>
                </select>
            </div>
            <div>
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo" required>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                </select>
            </div>
            <div>
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" required>
            </div>
            <div>
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" required>
            </div>
            <div>
                <label for="nombreHumano">Nombre del Humano:</label>
                <input type="text" name="nombreHumano" id="nombreHumano" required>
            </div>
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" required>
            </div>
            <div>
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto" accept="image/*" required>
            </div>

            <button type="submit">Registrar</button>
            <a href="{{ route('login') }}">Ya esta registrada</a>
        </form>
    </body>
</html>