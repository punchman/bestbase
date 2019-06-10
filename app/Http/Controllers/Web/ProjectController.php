<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\ProjectRequest;
    use App\Project;
    use App\ProjectDetail;

    class ProjectController extends Controller
    {
        public function index()
        {
            // with('companies')->get()
            $projects = Project::all();
            return view('project.index')->with('projects', $projects);
        }

        public function create()
        {
            return view('project.create');
        }

        public function store(ProjectRequest $request)
        {
            $project = new Project;
            $project->project_name  = $request->input('project_name');
            $project->company_id    = $request->input('company_id');
            $project->date_from     = $request->input('date_from');
            $project->date_to       = $request->input('date_to');
            $project->description   = $request->input('description');
            $project->amount        = $request->input('amount');
            $project->status        = $request->input('status');
            $project->save();

            if ($request->input('detail_description') !== ''):
                $project_detail = new ProjectDetail;
                $project_detail->projects()->associate($project);
                $project_detail->description = $request->input('detail_description');
                $project_detail->save();
            endif;

            return redirect('/projects')->with('success', 'Project Created');
        }

        public function show($id)
        {
            // with('companies')->
            $project = Project::findOrFail($id);
            return view('project.show')->with('project', $project);
        }

        public function edit($id)
        {
            $project = Project::findOrFail($id);
            return view('project.edit')->with('project', $project);
        }

        public function update(ProjectRequest $request, $id)
        {
            $project = Project::findOrFail($id);
            $project->project_name  = $request->input('project_name');
            $project->company_id    = $request->input('company_id');
            $project->date_from     = $request->input('date_from');
            $project->date_to       = $request->input('date_to');
            $project->description   = $request->input('description');
            $project->amount        = $request->input('amount');
            $project->status        = $request->input('status');
            $project->save();
            return redirect('/projects/'.$id)->with('success', 'Project Updated');
        }
        public function destroy($id)
        {
            $project = Project::findOrFail($id);
            $project->project_details()->delete();
            $project->delete();
            return redirect('/projects')->with('success', 'Project and Details Deleted');
        }

    }