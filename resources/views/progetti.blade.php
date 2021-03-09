<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progetti</title>
</head>
<body>
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .contenitore {
            width: 1200px;
            height: 100vh;
            margin: auto;
            text-align: center;
        }
        p {
            font-size: 50px;
            color: gray;
            text-transform: uppercase;
            line-height: 100vh;
        }
    </style>
    <div class="contenitore">
        <p>
            @forelse ($progetti as $progetto)
                {{ $progetto }}
            @empty
                Nessun progetto creato
            @endforelse
        </p>
    </div>
</body>
</html>