<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\ProjectDetailRequest;
    use App\Project;
    use App\ProjectDetail;

    class ProjectDetailController extends Controller
    {
        public function index()
        {
            // with('projects')->get()
            $project_details = ProjectDetail::all();
            return view('project_detail.index')->with('project_details', $project_details);
        }

        public function create($id)
        {
            $project = Project::findOrFail($id);
            return view('project_detail.create')->with('project', $project);
        }

        public function store(ProjectDetailRequest $request)
        {
            $project_detail = new ProjectDetail;
            $project_detail->project_id = $request->input('project_id');
            $project_detail->description = $request->input('description');
            $project_detail->save();
            $project_id = $request->input('project_id');
            return redirect('/projects/'.$project_id)->with('success', 'Ditail Created');
        }
        public function show($id)
        {
            $project_detail = ProjectDetail::findOrFail($id);
            return view('project_detail.show')->with('project_detail', $project_detail);
        }

        public function edit($id)
        {
            $project_detail     = ProjectDetail::findOrFail($id);
            $project = $project_detail->projects;
            return view('project_detail.edit')->with(['project_detail' => $project_detail, 'project' => $project]);
        }

        public function update(ProjectDetailRequest $request, $id)
        {
            $project_detail = ProjectDetail::findOrFail($id);
            $project_id = $project_detail->projects->id;
            $project_detail->project_id = $request->input('project_id');
            $project_detail->description = $request->input('description');
            $project_detail->update();

            return redirect('/projects/'.$project_id)->with('success', 'Detail Updated');
        }
        public function destroy($id)
        {
            $project_detail = ProjectDetail::findOrFail($id);
            $project_id = $project_detail->projects->id;
            $project_detail = ProjectDetail::destroy($id);

            return redirect('/projects/'.$project_id)->with('success', 'Detail Deleted');
        }

    }