{{-- User Edit --}}

@extends('layouts.app')

@section('content')

    <a href="/users" class="mb-4 btn btn-primary">Back</a>

    <h5>Edit User</h5>

        {{ Form::open(['action' => ['Web\UserController@update', $user->id], 'method' => 'POST']) }}

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('position', 'Position') }}
                    {{ Form::select('position', ['Boss' => 'Boss', 'PM' => 'PM', 'Dev' => 'Dev'], $user->position, ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>
            </div>

            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection