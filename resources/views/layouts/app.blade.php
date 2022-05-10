<!DOCTYPE html>
<html lang="es">
<head>
  @include('layouts.header')
</head>
<body>
  @include('layouts.navbar')
    {{-- Declaramos el apartado para rellenar con contenido con yield --}}
    @yield('content')
<footer>
  @include('layouts.footer')
</footer>
</body>

</html>