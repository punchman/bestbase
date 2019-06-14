@extends('layouts.app')

@section('content')

    <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/tasks/create') }}">Create New</a>

    @if (count($tasks) > 0)

    @php
    $i = 1;
    @endphp

    @foreach ($tasks as $task)

        <div><a href="{{ url('/tasks') }}/{{ $task->id }}">{{ $i }}. TaskID={{ $task->id }}</a><br>{{ $task->description }}<div>

        {{-- @if (is_object($task->users) && !empty($task->users))

            <div class="pl-4"><a href="{{ url('/users') }}/{{ $task->users->id }}">User: {{ $task->users->first_name . ' ' . $task->users->last_name}}</a></div>

        @endif

        @if (is_object($task->projects) && !empty($task->projects))

            <div class="pl-4"><a href="{{ url('/projects') }}/{{ $task->projects->id }}">Project: {{ $task->projects->description }}</a></div>

        @endif --}}

        @php
            $i++;
        @endphp

    @endforeach
    @endif

@endsection