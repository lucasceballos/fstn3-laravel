<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
        @if (Auth::check())
            <div>Usuario: {{ Auth::user()->name }}</div>
        @endif
            <div>Usuario Anonimo</div>
    <pre>
        {{ $actor->toJson() }}
    </pre>
    <pre>
        {{ $favoriteMovie->toJson() }}
    </pre>
</body>
</html>