@extends('layouts.app')

@section('content')
    <div class="mt-32 group/login">
        <form class="bg-white w-1/4 mx-auto shadow-md rounded px-8 pt-6 pb-8 mb-4 border-t-2" method="POST"
            action="{{ route('login') }}">
            @csrf
            <div class="py-4">
                <h1 class="text-center text-2xl font-bold font-mono">Login to your account</h1>
                <div class="bg-gradient-to-r from-rose-400 to-red-500 h-1 w-20 mx-auto rounded-full mt-3 group-hover/login:-translate-x-[6rem] transition-all duration-700 ease-in-out"></div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input id="email" type="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="py-1" role="alert">
                        <strong class="text-sm font-mono text-red-500">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input id="password" type="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
@endsection
