@extends('plantilla')
@section('titulo', 'Detalle del libro ' . $libro->titulo)

@section('contenido')
<div class="container content my-5">

  <div class="row g-5 align-items-start">

    <!-- Imagen -->
    <div class="col-md-4 text-center">
      <img src="https://picsum.photos/400?random=1" class="cover" alt="Portada del libro">
    </div>

    <!-- Info del libro -->
    <div class="col-md-8">
      <h2 class="fw-bold mb-2">{{$libro->titulo}}</h2>
      <h2 class="fw-bold mb-2">{{$libro->editorial}}</h2>
      <p class="text-muted mb-3">{{$libro->precio}} €</p>

      <div class="mb-4">
        <h5 class="fw-semibold">Descripción</h5>
        <p>{{$libro->descripcion ?? "Sin descripción"}}</p>
      </div>

      <a href="{{route('libros.index')}}" class="btn btn-outline-dark">Volver</a>
    </div>

  </div>

</div>
@endsection