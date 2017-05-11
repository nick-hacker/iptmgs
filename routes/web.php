<?php

use App\Post;

Route::get('/', function () {
	/*$posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        
    $archives = Post::archives();*/
    return view('pages.index');
});


Route::resource('colleges','CollegesController');
Route::resource('schools','SchoolsController');
Route::resource('departments','DepartmentsController');
Route::resource('programs','ProgramsController');
Route::resource('programs','ProgramsController');
Route::resource('categories','CartegoriesController');
Route::resource('organizations','OrganizationsController');
Route::resource('staffs','StaffsController');
Route::resource('students','StudentsController');
Route::post('/posts/{post}/comments','CommentsController@store');
Route::resource('posts','PostsController');



