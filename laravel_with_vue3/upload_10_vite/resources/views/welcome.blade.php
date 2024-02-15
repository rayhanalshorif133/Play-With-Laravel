<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello World</title>
        <script src="https://cdn.tailwindcss.com"></script>
        {{-- @vite('resources/css/app.css') --}}
    </head>
    <body class="flex flex-col justify-center w-full mx-auto">
        <div id="welcome"></div>
        <div id="user"></div>
        <div id="product"></div>
        @vite('resources/js/app.js')
    </body>
</html>
