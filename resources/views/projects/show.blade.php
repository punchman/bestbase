@extends('layouts.app')

@section('content')

    <a href="/projects" class="mb-4 btn btn-primary">Back</a>
    <a href="/projects/{{ $project->id }}/edit" class="mb-4 btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['Web\ProjectController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <h5>Single Company</h5>

        @if ( is_object($project) && !empty($project) )

            <h6>Name: {{ $project->company_name }}</h6>
            @if (is_object($project->companies) && !empty($project->companies))
                <div><a href="{{ url('/companies') }}/{{ $project->companies->id }}">Company: {{ $project->companies->company_name }}</a></div>
            @endif
            <div>DateFrom: {{ date('d.m.Y', strtotime($project->date_from)) }}</div>
            <div>DateTo: {{ date('d.m.Y', strtotime($project->date_to)) }}</div>
            <div>Description: {{ $project->description }}</div>
            <div>Total: {{ $project->amount }}</div>
            <div>Status: {{ $project->status }}</div>

            @if (is_object($project->project_details) && !empty($project->project_details))

                @foreach ($project->project_details as $detail)
                    <div class="pl-4">Details: {{ $detail->description }}</a></div>

                    @php
                        // <a href="{{ url('/project_details') }}/{{ $detail->id }}">
                    @endphp

                @endforeach

            @endif

        @endif

@endsection