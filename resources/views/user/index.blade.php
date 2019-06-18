@extends('layouts.app')

@section('content')

    <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/users/create') }}">Create New</a>

@if ( is_object($users) && !empty($users) )

    @php
        $i = 1;
    @endphp

    @foreach ($users as $user)

        <div><a href="{{ url('/users') }}/{{ $user->id }}">{{ $i }}. {{ $user->first_name }} {{ $user->last_name }}</a></div>
        @php
            $i++;
        @endphp

    @endforeach

@endif

@endsection