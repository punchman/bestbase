@extends('layouts.app')

@section('content')

    <h5>Single {{ $model }}</h5>



    @switch($model)
        @case('Company')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->company_name }}</h6>
                <div>{{ $item->address1 }}</div>
                <div>{{ $item->address2 }}</div>
                <div>{{ $item->city }}</div>
                <div>{{ $item->state }}</div>
                <div>{{ $item->country }}</div>

                @if ( is_object($item->projects) && !empty($item->projects) )

                    <div>Projects</div>
                    @foreach ($item->projects as $project)

                        <div class="pl-4">{{ $project->project_name }}</div>

                    @endforeach
                @endif

                @if ( is_object($item->payments) && !empty($item->payments) )

                    <div>Payments</div>
                    @foreach ($item->payments as $payment)

                        <div class="pl-4">{{ date("d.m.Y", strtotime($payment->date)) }} - {{ $payment->amount }}</div>

                    @endforeach
                @endif

            @endif

            <a href="/countries/{{ $item->id }} }}/edit" class="btn btn-default">Edit</a>

            @break

        @case('Project')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->project_name }}</h6>

            @endif

            @break

        @case('ProjectDetail')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->description }}</h6>

            @endif

            @break

        @case('Payment')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->amount }}</h6>

            @endif

            @break

        @case('Task')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->description }}</h6>

            @endif

            @break

        @case('User')

            @if ( is_object($item) && !empty($item) )

                <h6>{{ $item->email }}</h6>

            @endif

            @break


        @default

    @endswitch

@endsection