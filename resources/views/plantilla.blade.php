<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('titulo')</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('partials.nav')

@yield('contenido')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>