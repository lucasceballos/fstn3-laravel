<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }} ({{ $movie['id']}})</li>
        @endforeach
    </ul>
    
    @if (count($errors) > 0)
        <div>
            <div>Errores:</div>
            <ul>

                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
                
            </ul>
        </div>        
    @endif
    
</body>
</html>