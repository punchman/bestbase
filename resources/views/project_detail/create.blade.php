{{-- ProjectDetail Create --}}

@extends('layouts.app')

@section('content')

    <a href="/projects/{{ $project->id }}" class="mb-4 btn btn-primary">Back</a>

    <h5>Create Detail</h5>
    @include('project.body')

        {{ Form::open(['action' => 'Web\ProjectDetailController@store', 'method' => 'POST', 'class' => 'mt-4']) }}

            <div class="form-group">
                {{ Form::label('description', 'New Detail') }}
                {{ Form::textarea('description', '', ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Detail Description']) }}
            </div>

            {{ Form::hidden('project_id', $project->id) }}

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

        @include('project_detail.list')

@endsection