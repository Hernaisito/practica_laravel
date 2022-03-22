<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ("css/estilos.css")}}">
    <title>Listado</title>
</head>
<body>
<header>


@auth
    <h1>Listado de alumnos</h1>

    <div id="vue_crono">
        <cronometro />
    </div>
        <script src="{{asset('/js/app.js')}}"></script>
    <div class="derecha">
        <h3 >Registrado como {{auth()->user()->name}}</h3>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    </div>
@endauth

@guest
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('register')}}">Registrarme</a>

@endguest
</header>


<a class="tabla" href="{{route('streamer.create')}}">Nuevo Streamer</a>

<br><br>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo</th>
        <th>Contenido</th>
        <th>Viewers</th>
        <th>Pais</th>
    </tr>

    @foreach($streamers as $streamer)
        <tr>
            <td>{{ $streamer->nombre }}</td>
            <td>{{ $streamer->apellido }}</td>
            <td>{{ $streamer->tipo }}</td>
            <td>{{ $streamer->contenido }}</td>
            <td>{{ $streamer->viewers }}</td>
            <td>{{ $streamer->pais }}</td>

            <td><a href="{{route('streamer.show',$streamer->id)}}">Editar</a></td>
            <td>
                <form action="{{route('streamer.destroy',$streamer->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" value="Borrar">
                </form>
            </td>
        </tr>

    @endforeach
</table>
</body>
</html>
