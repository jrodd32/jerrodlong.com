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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/contact', function (App\Http\Requests\PublishContactFormRequest $form) {
    $form->persist();
    return redirect('thanks');
});
Route::get('/contacts', 'ContactsController@index');
Route::get('/thanks', 'PagesController@thanks');
Route::get('/changelog', 'BlogsController@index');
Route::get('/blog', 'BlogsController@create');
Route::post('/blog', function (App\Http\Requests\PublishBlogRequest $form) {
    $form->persist();
    return redirect('/blog');
});