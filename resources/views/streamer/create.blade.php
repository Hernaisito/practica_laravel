<?php
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Create</title>
</head>
<body>
<header>
    <h1>Crear nuevo Streamer</h1>
</header>
<form action="{{route('streamer.store')}}" method="post">
    @csrf
    <div class="grid">
        <label class="i1">Nombre: </label>      <input class="d1" type="text" name="nombre" id=""><br><br><!--Los nombres iguales a las migraciones-->
        <label class="i2">Apellido: </label>    <input class="d2" type="text" name="apellido" id=""><br><br>
        <label class="i3">Tipo: </label>        <input class="d3" type="text" name="tipo" id=""><br><br>
        <label class="i4">Contenido: </label>   <input class="d4" type="text" name="contenido" id=""><br><br>
        <label class="i5">Viewers: </label>     <input class="d5" type="text" name="viewers" id=""><br><br>
        <label class="i6">Pais: </label>        <input class="d6" type="text" name="pais" id=""><br><br>
        <input class="button" type="submit"  name="submit" value="Guardar">
    </div>


</form>
</body>
</html>
