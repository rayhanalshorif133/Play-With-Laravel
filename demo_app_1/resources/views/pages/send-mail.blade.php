@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1
            class="py-4 mx-auto text-2xl font-bold text-center text-white uppercase shadow-lg bg-gradient-to-r from-emerald-400 to-emerald-500 shadow-emerald-500">
            Send Email
        </h1>
        <div class="w-9/12 p-10 mx-auto shadow-xl row justify-content-center h-96">
            <form method="POST" action="{{route('send-mail')}}">
                @csrf
                <div class="py-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email To: </label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="py-2">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <div class="mt-1">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="subject">
                    </div>
                </div>
                <div class="py-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <div class="mt-1">
                        <textarea name="message" id="message" class="form-control" placeholder="message"></textarea>
                    </div>
                </div>
                <div class="py-2">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection