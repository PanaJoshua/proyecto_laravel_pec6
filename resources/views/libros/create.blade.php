@extends('plantilla')
@section('titulo', 'Añadir libro ')

@section('contenido')
    <div class="container content my-5">

        <h1>Nuevo Libro</h1>
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo')}}">
                @error('titulo')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" id="editorial" value="{{old('editorial')}}">
                @error('editorial')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio" value="{{old('precio')}}">
                @error('precio')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="año_publicacion">Año publicación:</label>
                <input type="text" class="form-control" name="año_publicacion" id="año_publicacion" value="{{old('año_publicacion')}}">
                @error('año_publicacion')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
                @error('descripcion')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <select class="form-control" name="autor_id" id="autor">
                    <option value="">Seleccionar autor...</option>
                    @foreach ($autores as $autor)
                        <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </form>
    </div>
@endsection
