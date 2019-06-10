@extends('layouts.app')

@section('content')

    <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
    <a class="mb-4 btn btn-success" href="{{ url('/projects/create') }}">Create New</a>

    @php
        $i = 1;
    @endphp

    @if (count($projects) > 0)

        @foreach ($projects as $project)

            @php
                $details_count = 0;
                $company_name = '-';

                if(is_object($project->project_details) && !empty($project->project_details)):
                    $details_count = count($project->project_details);
                endif;

                if(is_object($project->companies) && !empty($project->companies)):
                    $company_name = $project->companies->company_name;
                endif;
            @endphp

            <a class="list-group-item list-group-item-action d-flex" href="{{ url('/projects') }}/{{ $project->id }}">{{ $i }}. {{ $project->project_name }}<div class="ml-auto justify-content-between align-items-center"><span class="mx-4 badge badge-light badge-pill">{{ $project->project_name }}</span><span class="mx-4 badge badge-primary badge-pill">{{ $details_count }}</span></div></a>

            {{-- <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="{{ url('/projects') }}/{{ $project->id }}">{{ $i }}. {{ $project->project_name }}<span class="badge badge-primary badge-pill">{{ $details_count }}</span></a> --}}

            @php
                $i++;
            @endphp

        @endforeach

    @endif

@endsection