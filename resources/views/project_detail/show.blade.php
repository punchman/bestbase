@extends('layouts.app')

@section('content')

    <a href="/project_details/{{ $project_detail->id }}/edit" class="mr-1 btn btn-warning">Edit</a>

    <div class="mt-4">
        <h5>Single Detail</h5>
        <div>ID: {{ $project_detail->id }}</div>
        <div>ProjectID: {{ $project_detail->project_id }}</div>
        <div>Description: {{ $project_detail->description }}</div>
    </div>

@endsection