<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action={{route('guardarjuego')}}>
        @csrf
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="descripcion" placeholder="Descripcion">
        <input type="submit" value="Crear">
    </form>
</body>
</html>