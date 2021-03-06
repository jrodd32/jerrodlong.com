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

Route::get('/home', 'HomeController@index')->name('home'); // Should be ADMIN only

Route::get('/contacts', 'ContactsController@index'); // Should be ADMIN only
Route::post('/contact', function (App\Http\Requests\PublishContactFormRequest $form) {
    $form->persist();
    return redirect('thanks');
});
Route::get('/thanks', 'PagesController@thanks');

Route::get('/changelog', 'BlogsController@index');
Route::get('/blog', 'BlogsController@create'); // Should be ADMIN only
Route::post('/blog', function (App\Http\Requests\PublishBlogRequest $form) {
    $form->persist();
    return redirect('/blog');
});

Route::get('/projects', function (App\Project $project) {
    $projects = $project->with(['tags', 'phase'])->get();
    return view('projects.index', compact('projects'));
});
Route::get('/project', function(App\Phase $phase, App\Tag $tag) {
    $phases = $phase->pluck('name', 'id');
    $tags = $tag->pluck('name', 'id');
    $action = 'project';
    $method = 'post';
    return view('projects.form', compact('tags', 'phases', 'action', 'method'));
}); // Should be ADMIN only

Route::post('/project', function (App\Http\Requests\PublishProjectRequest $form) {
    $form->persist();
    return redirect('/projects');
});

Route::get('/project/{project}', function(App\Project $project, App\Phase $phase, App\Tag $tag) {
    $projectTags = $project->tags()->pluck('tag_id')->toArray();
    $phases = $phase->pluck('name', 'id');
    $tags = $tag->pluck('name', 'id');
    $action = 'project';
    $method = 'post';
    return view('projects.form', compact('project', 'phases', 'tags', 'projectTags', 'action', 'method'));
}); // Should be ADMIN only

Route::put('/project/{project}', function(App\Http\Requests\EditProjectRequest $form, App\Project $project) {
    $form->persist($project);
    return redirect('/projects');
}); // Should be ADMIN only

Route::get('/phases', function (App\Phase $phase) {
    $phases = $phase->where('deleted_at', '=', null)->get();
    return view('phases.index', compact('phases'));
});
Route::get('/phase', function () {
    return view('phases.form');
});
Route::get('/phase/{phase}', function (App\Phase $phase) {
    return view('phases.form', compact('phase'));
});
Route::put('/phase/{phase}', function (App\Http\Requests\EditPhaseRequest $form, App\Phase $phase) {
    $form->persist($phase);
    return redirect('/phases');
});
Route::post('/phase', function (App\Http\Requests\PublishPhaseRequest $form) {
    $form->persist();
    return redirect('/phases');
});