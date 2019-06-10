{{-- ProjectDetail Edit project_detail --}}

@extends('layouts.app')

@section('content')

    @php

        $project_id = ( is_object($project_detail->projects) && !empty($project_detail->projects) ) ? $project_detail->projects->id: '';

    @endphp

    <a href="/projects/{{ $project_id }}" class="mb-4 btn btn-primary">Back</a>

    <h5>Edit Detail</h5>
    @include('project.body')

        {{ Form::open(['action' => ['Web\ProjectDetailController@update', $project_detail->id], 'method' => 'POST', 'class' => 'mt-4']) }}

            <div class="form-group">
                {{ Form::label('description', 'Edit Detail') }}
                {{ Form::textarea('description', $project_detail->description, ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Detail Description']) }}
            </div>

            {{ Form::hidden('project_id', $project_id) }}

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

    @include('project_detail.list')

@endsection