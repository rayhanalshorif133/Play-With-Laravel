@extends('layouts.app', ['title' => 'Affiliates List'])

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1
            class="text-center mx-auto py-4 bg-gradient-to-r from-rose-400 to-red-500  shadow-red-500 shadow-lg
       text-2xl text-white uppercase font-bold">
            Affiliates List
        </h1>

        {{-- user details --}}
        <div class="mt-10 bg-white shadow-md border-[1px] border-gray-200 h-auto w-full mx-auto rounded-md">
            <div class="w-full bg-gray-400 h-auto rounded-t-md">
                <h3 class="text-xl text-white font-sans font-medium px-5 py-4 tracking-wide">User Details</h3>
            </div>
            <div class="w-full bg-gray-300 h-auto rounded-b-md px-5">
                <table class="w-full px-5 border-b-[1px] border-gray-400">
                    <thead class="border-b-[1px] border-gray-400">
                        <th class="text-left py-2">Username</th>
                        <th class="text-left py-2">Email</th>
                        <th class="text-left py-2">Affiliate Count</th>
                        <th class="text-left py-2">Affiliate Bonus</th>
                        <th class="text-left py-2">Affiliate Link</th>
                    </thead>
                    <tbody class="w-full">
                        @foreach ($users as $user)
                            <tr class="text-left py-2 border-b-[1px] border-gray-200">
                                <td class="py-2">{{$user->username}}</td>
                                <td class="py-2">{{$user->email}}</td>
                                <td class="py-2">{{$user->affiliate?->ref_count}}</td>
                                <td class="py-2">{{$user->affiliate?->ref_bonus}}</td>
                                <td class="py-2">{{$user->affiliate?->ref_link}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
