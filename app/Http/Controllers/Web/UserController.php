<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\Hash;
use App\User;
// use App\Task;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
        {
            $users = User::all();
            return view('user.index')->with('users', $users);
        }
        public function store(UserRequest $request)
        {
            $user = new User;
            $user->first_name    = $request->input('first_name');
            $user->last_name     = $request->input('last_name');
            $user->position      = $request->input('position');
            $user->email         = $request->input('email');
            $user->password      = Hash::make($request->input('password'));
            $user->save();
            return redirect('/users')->with('success', 'User Created');
        }

        public function show($id)
        {
            $user = User::findOrFail($id);
            return view('user.show')->with('user', $user);
        }

        public function update(UserEditRequest $request, $id)
        {
            $user = User::findOrFail($id);
            $user->first_name    = $request->input('first_name');
            $user->last_name     = $request->input('last_name');
            $user->position      = $request->input('position');
            $user->email         = $request->input('email');
            $user->update();
            return redirect('/users')->with('success', 'User Updated');
        }

        public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect('/users')->with('success', 'User Deleted');
        }

        public function create()
        {
            return view('user.create');
        }

        public function edit($id)
        {
            $user = User::findOrFail($id);
            return view('user.edit')->with('user', $user);
        }
}
