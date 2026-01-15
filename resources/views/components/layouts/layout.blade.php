<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    <x-layouts.header />

    <x-layouts.nav />

    <main class="bg-main text-black flex-grow">
        {{$slot}}
    </main>

    <x-layouts.footer />
</body>
</html>