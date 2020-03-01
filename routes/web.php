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

Route::get('/posts/closure/{post}', function($post) {
    $posts = [
        'first-post'    => 'This be the first one',
        'second-post'   => 'This be the second one'
    ];

    abort_unless(array_key_exists($post, $posts), 404, 'Post not found');

    return $posts[$post];
});

Route::get('/posts/{post}', 'PostsController@show');
