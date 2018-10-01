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
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/futsallist', 'FutsalController@getFutsals');
Route::get('/add', function () {
    return view('addfutsal');
});
Route::post('submit/list', 'FutsalController@addfutsal');
Route::get('/profile', 'UserController@profile');
Auth::routes();

Route::Post('/addPost', 'PostController@addPost');
Route::resource('home','PostController');
Route::get('/home', 'HomeController@index')->name('home');
