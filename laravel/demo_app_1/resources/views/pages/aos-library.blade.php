@extends('layouts.app')
@section('content')
    @php
        $randomGradientColor = ['from-purple-500 to-purple-900', 'from-green-600 to-cyan-600', 'from-blue-500 to-cyan-800', 'from-amber-500 to-pink-500', 'from-teal-200 to-teal-500', 'from-pink-500 to-rose-500', 'from-indigo-400 to-cyan-400', 'from-indigo-300 to-blue-500', 'from-slate-300 to-slate-500', 'from-rose-400 to-red-500', 'from-lime-400 to-lime-500', 'from-rose-400 to-red-500', 'from-blue-600 to-violet-600', 'from-purple-500 to-purple-900', 'from-amber-500 to-lime-500', 'from-red-500 to-orange-500', 'from-violet-500 to-purple-500', 'from-fuchsia-600 to-purple-600', 'from-fuchsia-600 to-pink-600', 'from-fuchsia-500 to-cyan-500', 'from-cyan-500 to-blue-500', 'from-slate-500 to-slate-800', 'from-emerald-600 to-indigo-400', 'from-violet-500 to-pink-500'];
        $animatedAos = ['fade-up', 'fade-down', 'fade-right', 'fade-left', 'zoom-in', 'zoom-out', 'slide-up', 'flip-up', 'flip-down', 'flip-right', 'flip-left'];
        $len = count($randomGradientColor) - 1;
        $lenAnimated = count($animatedAos) - 1;
        
        $randomNumber = rand(0, $len);
        $randomColor = $randomGradientColor[$randomNumber];
        $shadowColor = str_replace('to', 'shadow', $randomColor);
        $shadowColor = explode(' ', $shadowColor)[1];
        // lenAnimated
        $randomNumberAnimated = rand(0, $lenAnimated);
        $randomAnimated = $animatedAos[$randomNumberAnimated];
        
    @endphp
    <div class="max-w-6xl mx-auto">
        <div class="row justify-content-center">
            <h1  data-aos="{{ $randomAnimated }}"
                class="py-4 mx-auto text-2xl font-bold text-center text-white uppercase shadow-lg  {{ $randomColor }} bg-gradient-to-r {{ $shadowColor }}">
                AOS Library
            </h1>

            <div class="grid grid-cols-4 gap-4 my-10">

                @php
                    $randomNumberOflen = rand(10, 500);
                @endphp

                @for ($i = 0; $i < $randomNumberOflen; $i++)
                    @php
                        
                        $randomNumber = rand(0, $len);
                        $randomColor = $randomGradientColor[$randomNumber];
                        $shadowColor = str_replace('to', 'shadow', $randomColor);
                        $shadowColor = explode(' ', $shadowColor)[1];
                        $from = explode(' ', $randomColor)[0];
                        $to = explode(' ', $randomColor)[1];
                        // lenAnimated
                        $randomNumberAnimated = rand(0, $lenAnimated);
                        $randomAnimated = $animatedAos[$randomNumberAnimated];
                    @endphp
                    <div data-aos="{{ $randomAnimated }}"
                        class="text-center items-center flex flex-col justify-center my-auto h-[20rem] bg-gradient-to-r hover:bg-gradient-to-l {{ $randomColor }}  dashboard_card {{ $shadowColor }}">
                        <h2 class="text-2xl text-white font-bold py-2">{{ $from }}</h2>
                        <h2 class="text-2xl text-white font-bold py-2">{{ $to }}</h2>
                        <h3 class="text-xl text-white font-bold py-2">{{ $shadowColor }}</h3>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
