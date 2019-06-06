<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\ProjectDetailRequest;
    use App\ProjectDetail;

    class ProjectDetailController extends Controller
    {
        public function index()
        {
            $projectdetails = ProjectDetail::get();
            return response()->json($projectdetails);
        }
        public function store(ProjectDetailRequest $request)
        {
            $projectdetail = ProjectDetail::create($request->all());
            return response()->json($projectdetail, 201);
        }
        public function show($id)
        {
            $projectdetail = ProjectDetail::findOrFail($id);
            return response()->json($projectdetail);
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
    }