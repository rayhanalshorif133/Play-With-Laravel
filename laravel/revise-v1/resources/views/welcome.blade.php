<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header class="w-full bg-gray-100 shadow-sm">
        <nav class="container py-4 h-auto flex justify-between">
            <div class="flex space-x-4">
                <img class="w-10" src="{{asset('mark.svg')}}" alt="">
                <h2 class="flex items-center font-bold uppercase text-xl text-primary">Revise App</h2>
            </div>
            <div class="flex space-x-4">
                <ul class="flex space-x-4 nav">
                    <li class="">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container py-10">
        <a href="#" class="box">
            <h1 class="title">Role and Permission</h1>
        </a>
    </div>
    <ul>
        <li>body working card sdc</li>
        <li>s</li>
    </ul>

</body>

</html>
