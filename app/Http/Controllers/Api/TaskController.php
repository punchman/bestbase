<?php
    namespace App\Http\Controllers\Api;

    use App\Http\Requests\TaskRequest;
    use App\Task;

    class TaskController extends Controller
    {
        public function index()
        {
            $tasks = Task::get();
            return response()->json($tasks);
        }
        public function store(TaskRequest $request)
        {
            $task = Task::create($request->all());
            return response()->json($task, 201);
        }
        public function show($id)
        {
            $task = Task::findOrFail($id);
            return response()->json($task);
        }
        public function update(TaskRequest $request, $id)
        {
            $task = Task::findOrFail($id);
            $task->update($request->all());
            return response()->json($task, 200);
        }
        public function destroy($id)
        {
            Task::destroy($id);
            return response()->json(null, 204);
        }
    }