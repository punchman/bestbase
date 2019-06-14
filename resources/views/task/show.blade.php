@extends('layouts.app')

@section('content')

    <a href="/tasks" class="mb-4 btn btn-primary">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/tasks/create') }}">Create New</a>
    <a href="/tasks/{{ $task->id }}/edit" class="mb-4 btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['Web\TaskController@destroy', $task->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    @if ( is_object($task) && !empty($task) )

        @php
            $task_user =  (is_object($task->users) && !empty($task->users)) ? $task->users->first_name : '';
            $task_project =  (is_object($task->projects) && !empty($task->projects)) ? $task->projects->project_name : '';

        @endphp

        <h6>Description: {{ $task->description }}</h6>
        <div>TaskID: #{{ $task->id }}</div>
        <div>Project Name: {{ $task_project }}</div>
        <div>User Name: {{ $task_user }}</div>
        <div>Hours: {{ $task->hours }}</div>
        <div>Rate: {{ $task->rate }}</div>
        <div>Comment: {{ $task->comment }}</div>
        <div>Date: {{ date('Y-m-d', strtotime($task->date)) }}</div>
        <div>Status: {{ $task->status }}</div>
        <div>Aproved: {{ $task->approved }}</div>
        <div>Created: {{ $task->created_at }}</div>
        <div>Updated: {{ $task->updated_at }}</div>

    @endif

@endsection