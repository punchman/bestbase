@extends('layouts.app')

@section('content')

        <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
        <a class="mb-4 btn btn-success" href="{{ url('/companies/create') }}">Create New</a>

        @php
            $i = 1;
        @endphp

            @if (count($companies) > 0)

                @foreach ($companies as $company)

                    <div><a href="{{ url('/companies') }}/{{ $company->id }}">{{ $i }}. {{ $company->company_name }}</a></div>

                @if (is_object($company->projects) && !empty($company->projects))

                    @foreach ($company->projects as $project)

                        <div class="pl-4"><a href="{{ url('/projects') }}/{{ $project->id }}">Project: {{ $project->project_name }}</a></div>

                    @endforeach

                @endif

                @if (is_object($company->payments) && !empty($company->payments))

                    @foreach ($company->payments as $payment)

                        <div class="pl-4"><a href="{{ url('/payments') }}/{{ $payment->id }}">Payment: {{ $payment->amount }}</a></div>

                    @endforeach

                @endif

                    @php
                        $i++;
                    @endphp

                @endforeach

            @endif

@endsection
