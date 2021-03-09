<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progetti</title>
</head>
<body>
    <p>
        @forelse ($progetti as $progetto)
            {{ $progetto }}
        @empty
            Nessun progetto creato!
        @endforelse
    </p>
</body>
</html>