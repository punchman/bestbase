{{-- $project_details index --}}

@extends('layouts.app')

@section('content')

        <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
        <a class="mb-4 btn btn-success" href="{{ url('/project_details/create_single') }}">Create New</a>

        @php
            $i = 1;
        @endphp

            @if (count($project_details) > 0)

                @foreach ($project_details as $detail)

                    <div><a href="{{ url('/project_details') }}/{{ $detail->id }}">{{ $i }}. {{ $detail->description }}</a></div>

                @if (is_object($detail->projects) && !empty($detail->projects))

                    <div class="pl-4"><a href="{{ url('/projects') }}/{{ $detail->projects->id }}">Project: {{ $detail->projects->project_name }}</a></div>

                @endif

                @php
                    $i++;
                @endphp

                @endforeach

            @endif

@endsection
