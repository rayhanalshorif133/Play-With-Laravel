<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @isset($title)
            {{ $title }} | {{ config('app.name', 'Laravel') }}
        @endisset
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('/dist/output.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite('resources/css/app.css')

    @yield('head')
</head>

<body>
    <div id="app">
        <nav class="py-5 bg-white shadow-md">
            <div class="flex justify-between max-w-6xl mx-auto">
                <a class="" href="{{ url('/') }}">
                    <span class="text-2xl font-medium"> {{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="" id="navbarSupportedContent">
                    <ul class="flex ml-auto space-x-4 py-[6px]">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item group">
                                    <a class="text-base font-semibold text-gray-600"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <div class="w-0 h-1 transition-all duration-500 bg-red-500 group-hover:w-full"></div>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item group">
                                    <a class="text-base font-semibold text-gray-600"
                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                    <div class="w-0 h-1 transition-all duration-500 bg-red-500 group-hover:w-full"></div>
                                </li>
                            @endif
                        @else
                            <li class="py-[6px] relative">
                                <button class="relative text-base font-normal cursor-pointer logoutItemBtn">
                                    <span class="text-base font-semibold text-gray-600">{{ Auth::user()->name }}</span>
                                    <div
                                        class="absolute hidden logoutDrop top-[51px] -left-1 bg-gray-200 h-fit w-auto shadow-xl shadow-gray-600">
                                        <a class="block relative z-10 font-semibold group/bg_color px-5 py-2 text-sm border-b-[1px] border-gray-400 text-gray-700 transition-all duration-500 hover:text-white"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            <div
                                                class="absolute top-0 left-0 w-0 h-full transition-all duration-500 rounded-sm group-hover/bg_color:bg-gray-500 group-hover/bg_color:w-full shadow-gray-600 -z-10">
                                            </div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="hidden">
                                            @csrf
                                        </form>
                                    </div>
                                </button>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
            setInterval(() => {
                AOS.refresh();
            }, 3000);
        </script>

        <script>
            const logoutItemBtn = document.querySelector('.logoutItemBtn');
            const logoutDrop = document.querySelector('.logoutDrop');
            logoutItemBtn.addEventListener('click', () => {
                logoutDrop.classList.toggle('hidden');
            });
            setTimeout(() => {
                logoutDrop.classList.add('hidden');
            }, 5000);
        </script>
    </div>
</body>

</html>
