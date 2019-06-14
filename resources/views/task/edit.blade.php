{{-- Task Edit --}}

@extends('layouts.app')

@section('content')

    <a href="/tasks/{{ $task->id }}" class="mb-4 btn btn-primary">Back</a>

    {{ Form::open(['action' => ['Web\TaskController@update', $task->id], 'method' => 'POST']) }}

    <div class="form-row mb-3">
            {{ Form::label('description', 'Task Description') }}
            {{ Form::textarea('description', $task->description, ['rows' => '4','class' => 'form-control', 'placeholder' => 'Task Description']) }}
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('status', 'Status') }}
            {{ Form::select('status', ['New' => 'New', 'Complete' => 'Complete'], $task->status, ['class' => 'form-control']) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('approved', 'Aproved') }}
            {{ Form::select('approved', ['0' => 'No', '1' => 'Yes'], $task->approved, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('project_id', 'Project') }}
            {{ Form::select('project_id', \App\Project::pluck('project_name','id'), $task->project_id, ['class' => 'form-control', 'placeholder' => 'Choose a project']) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('user_id', 'User') }}
            {{ Form::select('user_id', \App\User::pluck('first_name','id'), $task->user_id, ['class' => 'form-control', 'placeholder' => 'Choose a user']) }}
        </div>
    </div>

    <div class="form-row mb-3">
            {{ Form::label('comment', 'Comment') }}
            {{ Form::textarea('comment', $task->comment, ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Task Comment']) }}
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            {{ Form::label('date', 'Date') }}
            {{ Form::date('date', date('Y-m-d', strtotime($task->date)), ['class' => 'form-control']) }}
        </div>
{{-- $task->date --}}
        <div class="form-group col-md-4">
            {{ Form::label('hours', 'Hours') }}
            {{ Form::number('hours', $task->hours, ['class' => 'form-control', 'placeholder' => 'Hours']) }}
        </div>

        <div class="form-group col-md-4">
            {{ Form::label('rate', 'Rate') }}
            {{ Form::number('rate', $task->rate, ['class' => 'form-control', 'placeholder' => 'Rate']) }}
        </div>
    </div>

    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}


@endsection