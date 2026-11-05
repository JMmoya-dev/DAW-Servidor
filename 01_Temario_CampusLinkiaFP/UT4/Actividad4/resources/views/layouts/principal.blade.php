
{{-- Plantilla base: la usan todas las páginas --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>@yield('titulo') - Tienda Informática</title>
</head>
<body>
    <header>
        <h1>Tienda Informática</h1>
        <nav>
            <a href="{{ route('componentes.listar') }}">Componentes</a>
        </nav>
    </header>

    <main>
        {{-- Aquí va el contenido de cada página --}}
        @yield('contenido')
    </main>

    <footer>
        <p>Actividad 4 - DAW |DWES |LinkiaFP by: Jose Mª Moya</p>
    </footer>
</body>

</html>


