@extends('layouts.app')

@section('content')

    <div class="container">
        @php
            $i = 1;
        @endphp        

        @switch($model)

            @case('Company')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $item)

                        <div><a href="{{ url('/companies') }}/{{ $item->CompanyID }}">{{ $i }}. {{ $item->CompanyName }}</a><div>
                        
                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Project')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $item)

                        <div><a href="{{ url('/projects') }}/{{ $item->ProjectID }}">{{ $i }}. {{ $item->ProjectName }}</a><div>
                        
                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Payment')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $item)

                        <div><a href="{{ url('/payments') }}/{{ $item->PaymentID }}">{{ $i }}. {{ $item->Total }}</a><div>
                        
                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Task')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $item)

                        <div><a href="{{ url('/tasks') }}/{{ $item->TaskID }}">{{ $i }}. {{ $item->Description }}</a><div>
                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break    

            @case('User')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $item)

                        <div><a href="{{ url('/users') }}/{{ $item->UserID }}">{{ $i }}. {{ $item->email }}</a><div>

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break                                            

            @default
        @endswitch
        
    </div>

@endsection
