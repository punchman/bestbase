<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Web\HomeController@index')->name('home');

Route::resource('companies', 'Web\CompanyController')->middleware('auth');

Route::get('/projects/{id}/detail_create', 'Web\ProjectDetailController@create')->middleware('auth');

// Route::get('/project_details/{project_detail}/edit', 'Web\ProjectDetailController@edit')->middleware('auth');

Route::resource('projects', 'Web\ProjectController')->middleware('auth');

Route::resource('project_details', 'Web\ProjectDetailController')->middleware('auth');

Route::resource('payments', 'Web\PaymentController')->middleware('auth');

Route::resource('tasks', 'Web\TaskController')->middleware('auth');

Route::resource('users', 'Web\UserController')->middleware('auth');


