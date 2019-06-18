{{-- User Create --}}

@extends('layouts.app')

@section('content')

    <a href="/users" class="mb-4 btn btn-primary">Back</a>

    <h5>Create User</h5>

        {{ Form::open(['action' => 'Web\UserController@store', 'method' => 'POST']) }}

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'First Name']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('position', 'Position') }}
                    {{ Form::select('position', ['Boss' => 'Boss', 'PM' => 'PM', 'Dev' => 'Dev'], 'PM', ['class' => 'form-control']) }}
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>

                <div class="form-group col-md-4">
                    {{ Form::label('password_confirmation', 'Password') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
                </div>
            </div>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}

@endsection