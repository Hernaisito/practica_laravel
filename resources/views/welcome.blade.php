<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Welcome</title>
</head>
<body>
    <header class="inicio">

        <h1>STREAMERS TWICH VS YOUTUBE</h1>
        @auth

            <h3>Registrado como {{auth()->user()->name}}</h3>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <input type="submit" value="Logout">
            </form>
        @endauth
    </header>

        @guest
            <fieldset class="login">
                <form action="{{route('login')}}" method="get">
                    <h4>Si ya tienes una cuenta inicia sesión:</h4>
                    <input type="submit" value="Login" name="submit">
                </form>
            </fieldset>
            <fieldset class="register">
                <h4>Si no tienes una cuenta, registrate, será un momento:</h4>
                <form action="{{route('register')}}" method="get">
                    <input type="submit" value="Registrarme" name="submit">
                </form>
            </fieldset>
        @endguest



    <!--<img src="/resources/images/logo.jpg" alt="logo">-->


</body>
</html>
