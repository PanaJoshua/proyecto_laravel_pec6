@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="container hero text-center">
        @auth
            <p>Bienvenido, {{ Auth::user()->login }}</p>
        @endauth
        <h1 class="fw-bold mb-4">Tu libreria personal, organizada</h1>
        <p class="lead text-muted mb-4">Gestiona tus libros de forma minimalista, clara y eficiente. Añade, consulta y
            clasifica tus lecturas.</p>

        <a href="{{ route('libros.index') }}" class="btn btn-dark px-4 py-2">Ver mis libros</a>
    </div>
@endsection
