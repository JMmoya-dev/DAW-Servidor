{{--
  LAYOUT: principal
  Objetio: definir la estructura común de todas las páginas.
  Huecos que rellena cada vista: "titulo" y "contenido".
  Parciales que inserta: cabecera y pie.
--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
     <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    @include('parciales.cabecera')

    <main>
        @yield('contenido')
    </main>

    @include('parciales.pie')
</body>
</html>