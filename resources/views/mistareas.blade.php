<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
</head>
<body>
   {{ $aviso}}
    @foreach ($mensajes as $mensaje )
    <ul><li>{{ $mensaje }}</li></ul>
    
    @endforeach
</body>
</html>