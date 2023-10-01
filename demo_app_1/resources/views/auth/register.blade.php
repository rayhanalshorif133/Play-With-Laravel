@extends('layouts.app')

@section('content')
    <div class="mt-32 group/login">
        <form method="POST" class="bg-white w-1/4 mx-auto shadow-md rounded px-8 pt-6 pb-8 mb-4 border-t-2" action="{{ route('register') }}">
            @csrf
            <div class="py-4">
                <h1 class="text-center text-2xl font-bold font-mono">
                    Register to your account
                </h1>
                <div
                    class="bg-gradient-to-r from-rose-400 to-red-500 h-1 w-20 mx-auto rounded-full mt-3 group-hover/login:-translate-x-[6rem] transition-all duration-700 ease-in-out">
                </div>
            </div>

            <div class="row mb-3">
                <input type="hidden" name="ref_id" value="{{ $ref_id }}">
                <label for="name" class="block text-gray-700 font-bold mb-2">{{ __('Full Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text"
                        class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email"
                    class="block text-gray-700 font-bold mb-2">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password"
                    class="block text-gray-700 font-bold mb-2">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm"
                    class="block text-gray-700 font-bold mb-2">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
