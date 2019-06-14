<?php
    namespace App\Http\Controllers\Web;

    use App\Http\Requests\TaskRequest;
    use App\Task;

    class TaskController extends Controller
    {
        public function index()
        {
            // with(['users', 'projects'])->get()
            $tasks = Task::all();
            return view('task.index')->with('tasks', $tasks);
        }

        public function create()
        {
            return view('task.create');
        }

        public function store(TaskRequest $request)
        {
            $task = Task::create($request->all());
            $task->save();
            return redirect('/tasks')->with('success', 'Task Created');

        }

        public function show($id)
        {
            $task = Task::findOrFail($id);
            return view('task.show')->with('task', $task);
        }

        public function edit($id)
        {
            $task = Task::findOrFail($id);
            return view('task.edit')->with('task', $task);
        }

        public function update(TaskRequest $request, $id)
        {
            $task = Task::findOrFail($id);
            $task->update($request->all());
            return redirect('/tasks/'.$id)->with('success', 'Task Updated');
        }

        public function destroy($id)
        {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect('/tasks')->with('success', 'Task Deleted');
        }

    }