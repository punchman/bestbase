@extends('layouts.app')

@section('content')

    <a href="/projects/{{ $project->id }}" class="mb-4 btn btn-primary">Back</a>

    <h5>Create Detail</h5>

    @include('projects.body')




        {{ Form::open(['action' => 'Web\ProjectDetailController@store', 'method' => 'POST', 'class' => 'pl-4 mt-4']) }}

            <div class="form-group">
                {{ Form::label('description', 'New Detail') }}
                {{ Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Detail Description']) }}
            </div>

            <div class="form-group">
                {{ Form::hidden('project_id', $project->id) }}
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection