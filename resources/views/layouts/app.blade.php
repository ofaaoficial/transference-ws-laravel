<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('registro') }}">Registro</a></li>
            </ul>
        </nav>
    </header>
    @if(session('errors'))
        {{ session('errors') }}
    @endif
    @if(session('msg'))
        {{ session('msg') }}
    @endif
    @yield('content')
<footer>
    <h2>Hola footer</h2>
</footer>
</body>
</html>