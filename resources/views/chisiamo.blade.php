<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi siamo</title>
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
        h2 {
            font-size: 50px;
            color: yellowgreen;
            text-transform: uppercase;
            line-height: 100vh;
        }
    </style>
    <div class="contenitore">
        <h2>{{ $chisiamo }}</h2>
    </div>
</body>
</html>