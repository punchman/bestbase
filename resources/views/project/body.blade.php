@if ( is_object($project) && !empty($project) )

    <h6> ID:{{ $project->id }} Name: {{ $project->project_name }}</h6>
    @if (is_object($project->companies) && !empty($project->companies))
        <div><a href="{{ url('/companies') }}/{{ $project->companies->id }}">Company: {{ $project->companies->company_name }}</a></div>
    @endif
    <div>DateFrom: {{ date('Y-m-d', strtotime($project->date_from)) }}</div>
    <div>DateTo: {{ date('Y-m-d', strtotime($project->date_to)) }}</div>
    <div>Description: {{ $project->description }}</div>
    <div>Total: {{ $project->amount }}</div>
    <div>Status: {{ $project->status }}</div>

    {{-- <div class="mt-4 d-flex align-items-center">
    <h5 class="mr-4">Details</h5><a href="/projects/{{ $project->id }}/detail_create" class="mb-2 btn btn-success">Create Detail</a>
    </div> --}}
    {{-- @if (is_object($project->project_details) && !empty($project->project_details))

            @foreach ($project->project_details as $detail)

                <div>
                    <div>ID:{{ $detail->id }} Detail: {{ $detail->description }}
                    <div class="mt-2 mb-4 d-flex">
                        <a href="/project_details/{{ $detail->id }}/edit" class="mr-1 btn btn-warning">Edit</a>
                        {!! Form::open(['action' => ['Web\ProjectDetailController@destroy', $detail->id], 'method' => 'POST']) !!}
                        {{-- , 'class' => 'float-left' --}}
                            {{-- {{ Form::hidden('_method', 'DELETE') }} --}}
                            {{-- {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} --}}
                        {{-- {!! Form::close() !!} --}}
                    {{-- </div>
                </div>

            @endforeach

    @endif --}}

@endif