@if ( is_object($project) && !empty($project) )

    <h6>Name: {{ $project->project_name }} ID:{{ $project->id }}</h6>
    @if (is_object($project->companies) && !empty($project->companies))
        <div><a href="{{ url('/companies') }}/{{ $project->companies->id }}">Company: {{ $project->companies->company_name }}</a></div>
    @endif
    <div>DateFrom: {{ date('d.m.Y', strtotime($project->date_from)) }}</div>
    <div>DateTo: {{ date('d.m.Y', strtotime($project->date_to)) }}</div>
    <div>Description: {{ $project->description }}</div>
    <div>Total: {{ $project->amount }}</div>
    <div>Status: {{ $project->status }}</div>

    <h5 class="pl-4 mt-4">Details</h5>
    @if (is_object($project->project_details) && !empty($project->project_details))

        @foreach ($project->project_details as $detail)
            <div class="well">{{ $detail->id }}. Details: {{ $detail->description }}</a></div>
        @endforeach

    @endif

@endif