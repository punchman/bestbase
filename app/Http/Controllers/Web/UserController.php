<?php

namespace App\Http\Controllers\Web;
use App\User;
use App\Task;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
        {
            $users = User::all();
            $model = 'User';
            return view('list')->with(['listarr' => $users ,'model' => $model]);
        }
        public function store(TaskRequest $request)
        {
            $users = User::create($request->all());
            return response()->json($users, 201);
        }
        public function show($id)
        {
            $user = User::findOrFail($id);
            $model = 'User';
            return view('single')->with(['item' => $user ,'model' => $model]);
        }
        public function update(TaskRequest $request, $id)
        {
            $users = User::findOrFail($id);
            $users->update($request->all());
            return response()->json($users, 200);
        }
        public function destroy($id)
        {
            User::destroy($id);
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
