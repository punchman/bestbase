@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div><a href="{{ url('/companies') }}">Companies</a></div>
    <div><a href="{{ url('/projects') }}">Projects</a></div>
    <div><a href="{{ url('/payments') }}">Payments</a></div>
    <div><a href="{{ url('/project_details') }}">Projects Details</a></div>
    <div><a href="{{ url('/tasks') }}">Tasks</a></div>
    <div><a href="{{ url('/users') }}">Users</a></div>
</div>
@endsection
