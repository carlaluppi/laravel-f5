<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? ''}}</title>
    @vite('resources/css/app.scss')
</head>
<body>
    <!-- menú de navegación -->
    <header>
        <x-navbar.navbar/>
    </header>
    <!-- contenido -->
    <main>
        {{ $slot }}
    </main>

</body>
@vite('resources/js/app.js')
</html>
