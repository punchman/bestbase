<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\ProjectRequest;
    use App\Project;

    class ProjectController extends Controller
    {
        public function index()
        {
            $projects = Project::get();
            return response()->json($projects);
        }
        public function store(ProjectRequest $request)
        {
            $project = Project::create($request->all());
            return response()->json($project, 201);
        }
        public function show($id)
        {
            $project = Project::findOrFail($id);
            return response()->json($project);
        }
        public function update(ProjectRequest $request, $id)
        {
            $project = Project::findOrFail($id);
            $project->update($request->all());
            return response()->json($project, 200);
        }
        public function destroy($id)
        {
            Project::destroy($id);
            return response()->json(null, 204);
        }
    }