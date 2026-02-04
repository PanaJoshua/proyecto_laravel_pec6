@extends('plantilla')
@section('titulo', 'Registro')
@section('contenido')
    <h1>Registro</h1>
    <form action="{{ route('registro') }}" method="POST">
        @csrf
        <div class="form-group" class="mb-4">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login" id="login" value="{{ old('login') }}">
            @error('login')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group" class="mb-4">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" />
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group" class="mb-4">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <input type="submit" name="enviar" value="Registrar" class="btn btn-dark btn-block mt-4">
    </form>
    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>

@endsection
