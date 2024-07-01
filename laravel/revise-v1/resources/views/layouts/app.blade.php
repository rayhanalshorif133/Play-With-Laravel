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
    <div id="app">
        <header class="w-full bg-gray-100 shadow-xl">
            <nav class="container py-4 h-auto flex justify-between">
                <div class="flex space-x-4">
                    <img class="w-10" src="{{ asset('mark.svg') }}" alt="">
                    <h2 class="flex items-center font-bold uppercase text-xl text-primary">Revise App</h2>
                </div>
                <div class="flex space-x-4">
                    <ul class="flex space-x-4 nav">
                        <li class="">
                            <a href="{{ route('home') }}" class="nav-link active">Home</a>
                        </li>
                        <li class="">
                            <a href="#" class="nav-link">About</a>
                        </li>
                        <li class="">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        @guest

                            @if (Route::has('login'))
                                <li class="">
                                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container py-10">
            @yield('content')
        </div>
    </div>
</body>

</html>
