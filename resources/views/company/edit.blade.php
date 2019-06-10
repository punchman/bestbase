{{-- Company Edit --}}

@extends('layouts.app')

@section('content')

    <a href="/companies/{{ $company->id }}" class="mb-4 btn btn-primary">Back</a>

    <h5>Edit Company</h5>

        {{ Form::open(['action' => ['Web\CompanyController@update', $company->id], 'method' => 'POST']) }}

            <div class="form-group">
                {{ Form::label('company_name', 'Company Name') }}
                {{ Form::text('company_name', $company->company_name, ['class' => 'form-control', 'placeholder' => 'Company Name']) }}
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    {{ Form::label('address1', 'Address1') }}
                    {{ Form::text('address1', $company->address1, ['class' => 'form-control', 'placeholder' => 'Address1']) }}
                </div>

                <div class="form-group col-md-6">
                    {{ Form::label('address2', 'Address2') }}
                    {{ Form::text('address2', $company->address2, ['class' => 'form-control', 'placeholder' => 'Address2']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('city', 'City') }}
                    {{ Form::text('city', $company->city, ['class' => 'form-control', 'placeholder' => 'City']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('state', 'State') }}
                    {{ Form::text('state', $company->state, ['class' => 'form-control', 'placeholder' => 'State']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('country', 'Country') }}
                    {{ Form::text('country', $company->country, ['class' => 'form-control', 'placeholder' => 'Country']) }}
                </div>
            </div>

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection