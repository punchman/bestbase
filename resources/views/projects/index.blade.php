@extends('layouts.app')

@section('content')

    <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/projects/create') }}">Create New</a>

    @php
        $i = 1;
    @endphp

    @if (count($projects) > 0)
        @foreach ($projects as $project)

            <div><a href="{{ url('/projects') }}/{{ $project->id }}">{{ $i }}. {{ $project->project_name }}</a><div>

            @php
                $i++;
            @endphp

        @endforeach
    @endif

@endsection