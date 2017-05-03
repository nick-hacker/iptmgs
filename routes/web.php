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
    return view('pages.index');
});

// Route::resource('/','PagesController');
Route::resource('colleges','CollegesController');
Route::resource('schools','SchoolsController');
Route::resource('departments','DepartmentsController');
Route::resource('programs','ProgramsController');
Route::resource('courses','CoursesController');
Route::resource('organizations','OrganizationsController');
Route::resource('staffs','StaffsController');
Route::resource('students','StudentsController');
Route::resource('posts','PostsController');



