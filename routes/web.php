<?php

use App\Post;


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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/post', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::post('/comment/{post}', 'CommentController@store');

Route::post('/like/{post}', 'LikeController@like');

Route::get('/contact', 'PostController@contact');

Route::get('/about', 'PostController@about');

//API Routes;

// get all posts
Route::get('/api/post',function ()
{
	return Post::all();
});

// get single post
Route::get('api/post/{post}', function ($post)
{
	return Post::find($post);
});




