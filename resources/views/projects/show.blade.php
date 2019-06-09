@extends('layouts.app')

@section('content')

    <a href="/projects" class="mb-4 btn btn-primary">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/projects/create') }}">Create New</a>
    <a href="/projects/{{ $project->id }}/detail_create" class="mb-4 btn btn-success">Create Detail</a>
    <a href="/projects/{{ $project->id }}/edit" class="mb-4 btn btn-warning">Edit</a>

    {!! Form::open(['action' => ['Web\ProjectController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <h5>Single Project</h5>

    @include('projects.body')

@endsection