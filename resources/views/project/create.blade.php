@extends('layouts.app')

@section('content')

    <a href="/projects" class="mb-4 btn btn-primary">Back</a>

    <h5>Create Project</h5>

        {{ Form::open(['action' => 'Web\ProjectController@store', 'method' => 'POST']) }}

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('project_name', 'Project Name') }}
                    {{ Form::text('project_name', '', ['class' => 'form-control', 'placeholder' => 'Project Name']) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('company_id', 'Company') }}
                    {{ Form::select('company_id', \App\Company::pluck('company_name','id'), null, ['class' => 'form-control', 'placeholder' => 'Choose a company']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('date_from', 'DateFrom') }}
                    {{ Form::date('date_from', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                </div>


                <div class="form-group col-md-6">
                    {{ Form::label('date_to', 'DateTo') }}
                    {{ Form::date('date_to', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', '', ['rows' =>'5', 'class' => 'form-control', 'placeholder' => 'Description']) }}
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('amount', 'Total') }}
                    {{ Form::text('amount', '', ['class' => 'form-control', 'placeholder' => 'Total']) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('status', 'Status') }}
                    {{ Form::text('status', '', ['class' => 'form-control', 'placeholder' => 'Status']) }}
                </div>
            </div>

            <hr>

            <h5 class="mt-4">Create Detail</h5>

            <div class="form-group">
                {{ Form::label('detail_description', 'First Detail') }}
                {{ Form::textarea('detail_description', '', ['rows' => "5",'class' => 'form-control', 'placeholder' => 'Detail Description']) }}
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection