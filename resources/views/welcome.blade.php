@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <h2 class="text-center">The Best Base</h2>

            @if (Route::has('login'))
                <div class="text-center">
                    @auth
                        <a href="{{ url('/home') }}">Base</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif                
        </div>
    </div>
@endsection