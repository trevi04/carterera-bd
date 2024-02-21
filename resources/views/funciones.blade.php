@extends('layout/plantilla')
@section('titulodepagina','Funciones')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1kR+x4ZlbqMjfx3sdF8duvo7z1peR5+0JwRq8kl9byPMb0j3Bsq3VFFxMlFcO5t" crossorigin="anonymous"></script>
    <script src="{{ asset('cine.js') }}"></script>
</head>
<body style="background-image: url('ima.jpg'); background-size: cover; background-position: center;">


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Cine Ubam</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/funciones">Agregar funcion</a>
          </li>
          
         
          
        </ul>
      </div>
    </div>
  </nav>


<div class="form-funciones-cine">

    <form action="{{ route('Cine.stori') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1> Agregar Sala</h1> <br>
        <h3> Nombre <input type="text" name="nombre" id="nombre"> </h3>
        <h3> Precio <input type="text" name="Precio" id="Precio"> </h3>
        <input type="file" id="imagen" name="imagen" accept="image/*">
        <input type="submit" value="Enviar">
    </form>
</div>





</body>
</html>
