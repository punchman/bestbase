@extends('layouts.app')

@section('content')

    <a href="/tasks" class="mb-4 btn btn-primary">Back</a>

    {{ Form::open(['action' => 'Web\TaskController@store', 'method' => 'POST']) }}

    <div class="form-row mb-3">
            {{ Form::label('description', 'Task Description') }}
            {{ Form::textarea('description', '', ['rows' => '4','class' => 'form-control', 'placeholder' => 'Task Description']) }}
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('status', 'Status') }}
            {{ Form::select('status', ['New' => 'New', 'Complete' => 'Complete'], 'New', ['class' => 'form-control']) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('approved', 'Aproved') }}
            {{ Form::select('approved', ['0' => 'No', '1' => 'Yes'], '0', ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('project_id', 'Project') }}
            {{ Form::select('project_id', \App\Project::pluck('project_name','id'), null, ['class' => 'form-control', 'placeholder' => 'Choose a project']) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('user_id', 'User') }}
            {{ Form::select('user_id', \App\User::pluck('first_name','id'), null, ['class' => 'form-control', 'placeholder' => 'Choose a user']) }}
        </div>
    </div>

    <div class="form-row mb-3">
            {{ Form::label('comment', 'Comment') }}
            {{ Form::textarea('comment', '', ['rows' => '4', 'class' => 'form-control', 'placeholder' => 'Task Comment']) }}
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            {{ Form::label('date', 'Date') }}
            {{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
        </div>

        <div class="form-group col-md-4">
            {{ Form::label('hours', 'Hours') }}
            {{ Form::number('hours', '', ['class' => 'form-control', 'placeholder' => 'Hours']) }}
        </div>

        <div class="form-group col-md-4">
            {{ Form::label('rate', 'Rate') }}
            {{ Form::number('rate', '', ['class' => 'form-control', 'placeholder' => 'Rate']) }}
        </div>
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}


@endsection