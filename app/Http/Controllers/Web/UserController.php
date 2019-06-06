<?php

namespace App\Http\Controllers\Web;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
        {
            $users = User::all();
            $model = 'User';

            // dd($users);
            return view('list')->with(['listarr' => $users ,'model' => $model]);
        }
        public function store(TaskRequest $request)
        {
            $users = User::create($request->all());
            return response()->json($users, 201);
        }
        public function show($id)
        {
            $users = User::findOrFail($id);
            return response()->json($users);
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
}
