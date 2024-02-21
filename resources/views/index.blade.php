@extends('layout/plantilla')
@section('titulodepagina','Cine')

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
        
        <br>
<div class="centrado" >
        <div class="container" >
    <div class="row row-cols-4"  >
        @foreach ($datos as $item)
        <button type="button" class="btn btn-success buttona" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrarDetalle('{{ $item->Nombre }}', '{{ $item->id }}', '{{ $item->precio }}')" style="background-color: rgba(2, 1, 57 ,.8)" >

        <div class="col card-margin" >
            <div class="card text-bg">
                        <img src="{{ asset($item->Imagen) }}" class="card-img-top" alt="{{ $item->Nombre }}">
                        <div class="card-body">
                            <h5 class="card-title" name="nombre1">{{ $item->Nombre }}</h5>
                            <p class="card-text">
                                <strong >Sala:</strong> <strong name="id1">{{ $item->id }}</strong><br>
                                <strong >Precio:</strong> <strong name="precio1" >{{ $item->precio }}</strong><br>
                            </p>
                        </div>
             </div>
        </div>
                 </button>
                @endforeach
                
            </div>
        </div>


</div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Venta de boletos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <p id="modal-nombre"></p>
          
            <p id="modal-id"></p>
            <p id="modal-precio"></p>
            <p id="modal-precio2" class="invisible"></p>
            <p id="modal-id2" class="invisible"></p>
            <p>Entradas <input type="text" id="entradas"></p>
            <button onclick="calcula()" >Calcular</button>
            
            <br>
            <p>Total a pagar <input type="text" id="pagar"></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>


<form action="{{ route('Cine.store') }}" method="POST">
  @csrf
          <input type="text" id="idform" name="idform" class="invisible">
          <input type="text" id="entradas2" name="entradas2" class="invisible">
          <button type="submit" >Save changes</button>
</form>  




        </div>
      </div>
    </div>
  </div>


</body>
</html>
