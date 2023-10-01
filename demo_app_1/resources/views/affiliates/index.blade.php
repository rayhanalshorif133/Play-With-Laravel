@extends('layouts.app', ['title' => 'Affiliates'])

@section('content')
    <div class="max-w-6xl mx-auto">
        <h1
            class="text-center mx-auto py-4 bg-gradient-to-r from-rose-400 to-red-500  shadow-red-500 shadow-lg
       text-2xl text-white uppercase font-bold">
            Affiliates
        </h1>

        {{-- user details --}}
        <div class="mt-10 bg-white shadow-md border-[1px] border-gray-200 h-auto w-1/2 mx-auto rounded-md">
            <div class="w-full bg-gray-400 h-auto rounded-t-md">
                <h3 class="text-xl text-white font-sans font-medium px-5 py-4 tracking-wide">User Details</h3>
            </div>
            <div class="w-full bg-gray-300 h-auto rounded-b-md">
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Username : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->user->username}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Full Name : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->user->name}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Email : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->user->email}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Referral Link : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->ref_link}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Referral Count : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->ref_count}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Referral Commission : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->ref_commission}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Referral Bonus : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->ref_bonus}}</span>
                    </h4>
                </div>
                <div class="border-b-[1px] border-gray-100 w-full">
                    <h4 class="text-base text-stone-800 font-sans font-medium px-5 py-[10px] tracking-wide">
                        Available Amount : <span class="text-stone-800 text-base font-sans font-normal">{{$affiliateUser->available_amount}}</span>
                    </h4>
                </div>

            </div>
        </div>
    </div>
@endsection
