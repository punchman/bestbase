@extends('layouts.app')

@section('content')

    <a href="/companies" class="mb-4 btn btn-primary">Back</a>
    <a href="/companies/{{ $company->id }}/edit" class="mb-4 btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['Web\CompanyController@destroy', $company->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

    <h5>Single Company</h5>

        @if ( is_object($company) && !empty($company) )

            <h6>Name: {{ $company->company_name }}</h6>
            <div>Address1: {{ $company->address1 }}</div>
            <div>Address2: {{ $company->address2 }}</div>
            <div>City: {{ $company->city }}</div>
            <div>State: {{ $company->state }}</div>
            <div>Country: {{ $company->country }}</div>

            @if ( is_object($company->projects) && !empty($company->projects) )

                <div class="mt-4">Projects</div>
                @foreach ($company->projects as $project)

                    <div class="pl-4">{{ $project->project_name }}</div>

                @endforeach
            @endif

            @if ( is_object($company->payments) && !empty($company->payments) )

                <div class="mt-4">Payments</div>
                @foreach ($company->payments as $payment)

                    <div class="pl-4">{{ date("d.m.Y", strtotime($payment->date)) }} - {{ $payment->amount }}</div>

                @endforeach
            @endif

        @endif

@endsection