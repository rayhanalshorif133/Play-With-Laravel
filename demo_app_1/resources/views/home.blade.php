@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="row justify-content-center">
            <div class="grid grid-cols-4 gap-4">
                <a href="{{route('affiliates.index')}}" class="flex items-center justify-center bg-gradient-to-r hover:bg-gradient-to-l from-rose-400 to-red-500 dashboard_card shadow-red-500">
                    <h2 class="text-2xl text-white uppercase font-bold py-[6rem]">
                        Affiliates Links
                    </h2>
                </a>
                <a href="{{route('google-map')}}" class="flex items-center justify-center bg-gradient-to-r hover:bg-gradient-to-l from-teal-400 to-teal-500 dashboard_card shadow-teal-500">
                    <h2 class="text-2xl text-white uppercase font-bold py-[6rem]">
                        Google Map
                    </h2>
                </a>
                <a href="{{route('send-mail')}}" class="flex items-center justify-center bg-gradient-to-r hover:bg-gradient-to-l from-emerald-400 to-emerald-500 dashboard_card shadow-emerald-500">
                    <h2 class="text-2xl text-white uppercase font-bold py-[6rem]">
                        Email Sender
                    </h2>
                </a>
            </div>
        </div>
    </div>
@endsection
