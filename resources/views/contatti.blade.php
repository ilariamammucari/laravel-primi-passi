<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatti</title>
</head>
<body>
    <ul>
        @foreach ($contatti as $contatto)
            <li>{{ $contatto }}</li>
        @endforeach
    </ul>
</body>
</html>