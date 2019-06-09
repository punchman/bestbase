@extends('layouts.app')

@section('content')
        @switch($model)
            @case('Company')
                @php
                    $url = '/companies/create';
                @endphp
            @break

            @case('Project')
                @php
                    $url = '/projects/create';
                @endphp
            @break

            @case('ProjectDetail')
                @php
                    $url = '/project_details/create';
                @endphp
            @break

            @case('Payment')
                @php
                    $url = '/payments/create';
                @endphp
            @break

            @case('Task')
                @php
                    $url = '/tasks/create';
                @endphp
            @break

            @case('User')
                @php
                    $url = '/users/create';
                @endphp
            @break

            @default

        @endswitch

        <a class="mb-4 btn btn-primary" href="{{ url('/home') }}">Back</a>
        <a class="mb-4 btn btn-success" href="{{ url($url) }}">Create New</a>

        @php
            $i = 1;
        @endphp

        @switch($model)

            @case('Company')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $company)

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
                @break

            @case('Project')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $project)

                        <div><a href="{{ url('/projects') }}/{{ $project->id }}">{{ $i }}. {{ $project->project_name }}</a><div>

                        @if (is_object($project->project_details) && !empty($project->project_details))

                            @foreach ($project->project_details as $detail)
                                <div class="pl-4"><a href="{{ url('/project_details') }}/{{ $detail->id }}">Payment: {{ $detail->description }}</a></div>

                            @endforeach

                        @endif

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('ProjectDetail')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $project_detail)

                        <div><a href="{{ url('/project_details') }}/{{ $project_detail->id }}">{{ $i }}. {{ $project_detail->description }}</a><div>

                            @if (is_object($project_detail->projects) && !empty($project_detail->projects))
                                <div class="pl-4"><a href="{{ url('/projects') }}/{{ $project_detail->projects->id }}">Project: {{ $project_detail->projects->project_name }}</a></div>

                            @endif

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Payment')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $payment)

                        <div><a href="{{ url('/payments') }}/{{ $payment->id }}">{{ $i }}. Amount: {{ $payment->amount }}</a><div>

                        @if (is_object($payment->companies) && !empty($payment->companies))

                            <div class="pl-4"><a href="{{ url('/companies') }}/{{ $payment->companies->id }}">Company: {{ $payment->companies->company_name}}</a></div>

                        @endif

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('Task')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $task)

                        <div><a href="{{ url('/tasks') }}/{{ $task->id }}">{{ $i }}. TaskID={{ $task->id }}</a><div>

                        @if (is_object($task->users) && !empty($task->users))

                            <div class="pl-4"><a href="{{ url('/users') }}/{{ $task->users->id }}">User: {{ $task->users->first_name . ' ' . $task->users->last_name}}</a></div>

                        @endif

                        @if (is_object($task->projects) && !empty($task->projects))

                            <div class="pl-4"><a href="{{ url('/projects') }}/{{ $task->projects->id }}">Project: {{ $task->projects->description }}</a></div>

                        @endif

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @case('User')
                @if (count($listarr) > 0)
                    @foreach ($listarr as $user)

                        <div><a href="{{ url('/users') }}/{{ $user->id }}">{{ $i }}. {{ $user->email }}</a><div>

                        @if (is_object($user->tasks) && !empty($user->tasks))

                            @foreach ($user->tasks as $task)
                                <div class="pl-4"><a href="{{ url('/tasks') }}/{{ $task->id }}">Task #{{ $task->id }}</a></div>

                            @endforeach

                        @endif

                        @php
                            $i++;
                        @endphp

                    @endforeach
                @endif
                @break

            @default
        @endswitch

        {{-- @if ($model == 'Company')
            <div class="mt-4">{{ $listarr->links() }}</div>
        @endif --}}

@endsection
