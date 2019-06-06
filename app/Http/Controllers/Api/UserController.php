<?php

namespace App\Http\Controllers\Api;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
        {
            $tasks = User::get();
            return response()->json($tasks);
        }
        public function store(TaskRequest $request)
        {
            $task = User::create($request->all());
            return response()->json($task, 201);
        }
        public function show($id)
        {
            $task = User::findOrFail($id);
            return response()->json($task);
        }
        public function update(TaskRequest $request, $id)
        {
            $task = User::findOrFail($id);
            $task->update($request->all());
            return response()->json($task, 200);
        }
        public function destroy($id)
        {
            User::destroy($id);
            return response()->json(null, 204);
        }
}
