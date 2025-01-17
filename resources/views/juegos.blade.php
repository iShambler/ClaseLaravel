<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form method="GET" action={{route('listajuegos')}}>
    <input type="text" name="nombre" placeholder="Buscar">
    <input type="submit" value="Buscar">

</form>

<body>
    <h1>Todos mis juegos</h1>
   <ul>
    @foreach ($juegos as $juego)
        <li>
            <a href="{{route('mostrarjuego', $juego->id)}}">{{$juego->nombre}}{{$juego->descripcion}}</a>
        </li>
    @endforeach
</body>

</html>