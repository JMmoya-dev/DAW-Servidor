<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Mi Aplicación</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header>
        <h1>Mi Aplicación</h1>
        @include('partials.nav')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2025 Mi Aplicación</p>
    </footer>
</body>

</html>