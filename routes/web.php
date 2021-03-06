<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.welcome');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('blog/{post}', 'PostsController@show');

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('projects/{project}', 'ProjectsController@show'); 