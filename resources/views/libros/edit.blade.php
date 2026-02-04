@extends('plantilla')
@section('titulo', 'Editar libro ' . $libro->titulo)

@section('contenido')
    <div class="container content my-5">

        <h1>Editar {{$libro->titulo}}</h1>
        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') ?? $libro->titulo }}">
            </div>
            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" id="editorial" value="{{ old('editorial') ?? $libro->editorial }}">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{ old('precio') ?? $libro->precio }}">
            </div>
            <div class="form-group">
                <label for="año_publicacion">Año publicación:</label>
                <input type="text" class="form-control" name="año_publicacion" id="año_publicacion" value="{{ old('año_publicacion') ?? $libro->año_publicacion }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion') ?? $libro->descripcion }}">
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <select class="form-control" name="autor_id" id="autor">
                    <option value="">Seleccionar autor...</option>
                    @foreach ($autores as $autor)
                        <option value="{{$autor->id}}" {{$autor->id  == $libro->autor?->id ? 'selected': ''}}>{{$autor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection
