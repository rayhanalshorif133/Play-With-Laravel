<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                <h2>One Component One App</h2>
                <hello-world/>
                {{-- <welcome-component/>
                <product-list-component/> --}}
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
