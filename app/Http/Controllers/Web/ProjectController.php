<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\ProjectRequest;
    use App\Project;

    class ProjectController extends Controller
    {
        public function index()
        {
            $projects = Project::with('companies')->get();
            return view('projects.index')->with('projects', $projects);
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

            return redirect('/projects')->with('success', 'Project Created');
        }

        public function show($id)
        {
            $project = Project::with('companies')->findOrFail($id);
            return view('projects.show')->with('project', $project);
        }

        public function edit($id)
        {
            $project = Project::findOrFail($id);
            return view('projects.edit')->with('project', $project);
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
            $project->delete();
            return redirect('/projects')->with('success', 'Project Deleted');
        }

    }