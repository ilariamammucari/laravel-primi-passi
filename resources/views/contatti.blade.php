<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatti</title>
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
            position: relative;
        }
        ul {
            list-style: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }
        ul li {
            font-size: 50px;
            color: gray;
        }
        ul li a {
            text-decoration: none;
            cursor: pointer;
        }
        ul li:first-child {
            color: yellowgreen;
        }
    </style>
    <div class="contenitore">
        <ul>
            <li>Contatti: </li>
            @foreach ($contatti as $contatto)
                <li>{{ $contatto }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>