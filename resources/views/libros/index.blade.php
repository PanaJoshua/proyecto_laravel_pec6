@extends('plantilla')
@section('titulo', 'Lista de libros')

@section('contenido')
    <div class="container my-5" style="max-width: 900px;">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold mb-4">Mis libros</h2>
            @auth
            <a class="btn btn-dark" href="{{ route('libros.create') }}"><i class="bi bi-plus-circle-fill"></i> Nuevo</a>
            @endauth
        </div>
        @if (session()->has('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        <div class="list-group">
            @forelse ($libros as $libro)
                <div class="d-flex justify-content-between">
                    <a href="{{ route('libros.show', $libro) }}"
                        class="list-group-item list-group-item-action book-card py-3 d-flex align-items-center">
                        <img src="https://picsum.photos/120?random={{ $loop->iteration }}" class="thumb"
                            alt="Portada libro">
                        <div>
                            <h5 class="mb-1 fw-semibold">{{ $libro->titulo }}</h5>
                            <h5 class="mb-1 fw-semibold">{{ $libro->editorial }}</h5>
                            <small class="text-muted">{{ $libro->precio }} € |
                                {{ $libro->autor?->nombre }}
                                
                                @foreach ($libro->generos as $genero)
                                    <span class="badge text-bg-dark">{{ $genero->nombre }}</span>
                                @endforeach

                            </small>
                            <h5 class="mb-1 fw-semibold">{{ $libro->año_publicacion }}</h5>
                        </div>
                    </a>
                    @auth
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <div class="d-flex align-items-center ">
                                <button class="btn btn-danger mx-2 my-4"><i class="bi bi-trash"></i></button>
                                <a class="btn btn-dark" href="{{ route('libros.edit', $libro->id) }}"><i
                                        class="bi bi-pencil"></i></a>
                            </div>
                    </form>
                    @endauth
                </div>
            @empty
                <h2 class="danger">No hay libros</h2>
            @endforelse
            <div class="my-4">
                {{ $libros->links() }}
            </div>
        </div>
    </div>
@endsection
