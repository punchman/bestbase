@extends('layouts.app')

@section('content')

    <a href="/users" class="mb-4 btn btn-primary">Back</a>
    <a href="/users/{{ $user->id }}/edit" class="mb-4 btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['Web\UserController@destroy', $user->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <h5>Single User</h5>

    @if ( is_object($user) && !empty($user) )

        <h6>Name: {{ $user->first_name }} {{ $user->last_name }}</h6>
        <div>Position: {{ $user->position }}</div>
        <div>Email: {{ $user->email }}</div>

    @endif

@endsection