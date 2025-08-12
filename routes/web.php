<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Valentino', 'title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

