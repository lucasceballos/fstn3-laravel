<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>
            <h1>{{ $nombre }} ({{ $id }})</h1>
            <div>Descripcion de la pelicula</div>
            <div>Duracion: {{ $duracion }}</div>
            <ul>
                @foreach ($categorias as $categoria)
                    <li>{{ $categoria }}</li>
                @endforeach                
            </ul>
            @if ($duracion > 120)
                <div>Esta pelicula es muy larga</div>
            @endif
            
        </div>
</body>
</html>