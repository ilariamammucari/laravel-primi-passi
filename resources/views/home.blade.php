<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
</head>
<body>
    <h1>Benvenuti nella prima home page con Laravel</h1>

    <ul>
        <li><a href="/chisiamo">{{ $chisiamo }}</a></li>
        <li><a href="/progetti">{{ $progetti }}</a></li>
        <li><a href="/contatti">{{ $contatti }}</a></li>
    </ul>
</body>
</html>