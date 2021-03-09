<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
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
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        h1 {
            text-align: center;
            color: red;
        }
        ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }
        ul li {
            width: calc(100% / 8);
            font-size: 20px;

        }
        ul li a {
            text-decoration: none;
            color: gray;
            cursor: pointer;
        }
        ul li:hover a {
            text-decoration: underline;
        }
    </style>
    <div class="contenitore">
        <h1>Benvenuti nella prima home page con Laravel</h1>
        
        <ul>
            @foreach ($lista as $k => $el)
            <li><a href="{{ ($k) }}">{{ $el }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>