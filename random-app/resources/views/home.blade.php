@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>{{ __('You are logged in!') }}</h3>
                    <hr/>
                    <h4>{{ __('Your role is !') }} {{Auth::user()->roles[0]->name}}</h4>

                    <div class="py-2">
                        <a href="{{route('api.subscriber-notification')}}" class="btn btn-sm btn-primary">
                            Subscriber Notification
                        </a>
                    </div>
                    
                    <div class="py-2">
                        {{-- http://127.0.0.1:8000/generate-pdf?title=ki%20hocce%20suni --}}
                        <a href="{{route('generate-pdf')}}?title=This%20is%20a%20title" class="btn btn-sm btn-danger">
                            Generate PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
