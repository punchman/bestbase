<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\ProjectDetailRequest;
    use App\ProjectDetail;

    class ProjectDetailController extends Controller
    {
        public function index()
        {
            $project_details = ProjectDetail::with('projects')->get();
            $model = 'ProjectDetail';
            return view('list')->with(['listarr' => $project_details, 'model' => $model]);
        }
        public function store(ProjectDetailRequest $request)
        {
            $projectdetail = ProjectDetail::create($request->all());
            $project_id = $request->input('project_id');
            return redirect('/projects/'.$project_id)->with('success', 'Ditail Created');
        }
        public function show($id)
        {
            $project_detail = ProjectDetail::findOrFail($id);
            $model = 'ProjectDetail';
            return view('single')->with(['item' => $project_detail, 'model' => $model]);
        }
        public function update(ProjectDetailRequest $request, $id)
        {
            $projectdetail = ProjectDetail::findOrFail($id);
            $projectdetail->update($request->all());
            return response()->json($projectdetail, 200);
        }
        public function destroy($id)
        {
            ProjectDetail::destroy($id);
            return response()->json(null, 204);
        }

        public function create()
        {
            //
        }

        public function edit($id)
        {
            //
        }
    }