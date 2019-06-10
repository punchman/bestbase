{{-- ProjectDetail Create project_details --}}

@extends('layouts.app')

@section('content')

    <a href="/project_details/" class="mb-4 btn btn-primary">Back</a>

    <h5>Create Detail</h5>

        {{ Form::open(['action' => 'Web\ProjectDetailController@store', 'method' => 'POST', 'class' => 'mt-4']) }}

            <div class="form-group">
                {{ Form::label('project_id', 'Project') }}
                {{ Form::select('project_id', \App\Project::pluck('project_name','id'), null, ['class' => 'form-control', 'placeholder' => 'Choose a project']) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'New Detail') }}
                {{ Form::textarea('description', '', ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Detail Description']) }}
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection