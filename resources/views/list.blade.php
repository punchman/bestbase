@extends('layouts.app')

@section('content')

    <div class="container">
        @php
            $i = 1;
        @endphp        

        @switch($model)

            @case('Company')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $company)

                        <div><a href="{{ url('/companies') }}/{{ $company->CompanyID }}">{{ $i }}. {{ $company->CompanyName }}</a><div>
                        
                        @foreach ($company->projects as $project)
                            <div class="pl-4"><a href="{{ url('/projects') }}/{{ $project->ProjectID }}">Project: {{ $project->ProjectName }}</a></div>

                        @endforeach

                        @foreach ($company->payments as $payment)
                            <div class="pl-4"><a href="{{ url('/payments') }}/{{ $payment->PaymentID }}">Payment: {{ $payment->Total }}</a></div>

                        @endforeach

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Project')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $project)

                        <div><a href="{{ url('/projects') }}/{{ $project->ProjectID }}">{{ $i }}. {{ $project->ProjectName }}</a><div>
                        
                        {{-- @foreach ($project->project_details as $detail) --}}
                            {{-- <div class="pl-4"><a href="{{ url('/projects_details') }}/{{ $project->projects_details->ProjectDetailID }}">Ditail: {{ $project->projects_details->ProjectDetailID }}</a></div> --}}
                        {{-- @endforeach --}}

                        {{-- <div>{{ $project->projects_details()->ProjectDetailID }}</div> --}}

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

                        <div><a href="{{ url('/tasks') }}/{{ $item->TaskID }}">{{ $i }}. TaskID={{ $item->TaskID }}, UserID={{ $item->users->UserID }}</a><div>
                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break    

            @case('User')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $user)

                        <div><a href="{{ url('/users') }}/{{ $user->UserID }}">{{ $i }}. {{ $user->email }}</a><div>

                        @foreach ($user->tasks as $task)
                            <div class="pl-4"><a href="{{ url('/tasks') }}/{{ $task->TaskID }}">Task #{{ $task->TaskID }}</a></div>

                        @endforeach

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
