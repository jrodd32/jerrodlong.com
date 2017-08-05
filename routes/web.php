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

Route::get('/projects', 'ProjectsController@index');
Route::get('/project', 'ProjectsController@create'); // Should be ADMIN only
Route::post('/project', function (App\Http\Requests\PublishProjectRequest $form) {
    $form->persist();
    return redirect('/project');
});

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
Route::post('/phase/{phase}', function (App\Http\Requests\EditPhaseRequest $form, App\Phase $phase) {
    $form->persist($phase);
    return redirect('/phase');
});
Route::post('/phase', function (App\Http\Requests\PublishPhaseRequest $form) {
    $form->persist();
    return redirect('/phase');
});