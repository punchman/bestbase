{{-- Poject Edit project --}}

@extends('layouts.app')

@section('content')

    <a href="/projects/{{ $project->id }}" class="mb-4 btn btn-primary">Back</a>

    <h5>Edit Project</h5>

        {{ Form::open(['action' => ['Web\ProjectController@update', $project->id], 'method' => 'POST']) }}

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('project_name', 'Project Name') }}
                    {{ Form::text('project_name', $project->project_name, ['class' => 'form-control', 'placeholder' => 'Project Name']) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('company_id', 'Company ID') }}
                    {{ Form::text('company_id', $project->company_id, ['class' => 'form-control', 'placeholder' => 'Company ID']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('date_from', 'DateFrom') }}
                    {{ Form::text('date_from', $project->date_from, ['class' => 'form-control', 'placeholder' => 'DateFrom']) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('date_to', 'DateTo') }}
                    {{ Form::text('date_to', $project->date_to, ['class' => 'form-control', 'placeholder' => 'DateTo']) }}
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::text('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Description']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('amount', 'Total') }}
                    {{ Form::text('amount', $project->amount, ['class' => 'form-control', 'placeholder' => 'Total']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('status', 'Status') }}
                    {{ Form::text('status', $project->status, ['class' => 'form-control', 'placeholder' => 'Status']) }}
                </div>
            </div>

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection