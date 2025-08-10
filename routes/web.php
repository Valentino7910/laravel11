<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Valentino', 'title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque totam tenetur ullam
            illo soluta. Non soluta ipsum officiis maiores, ullam illum beatae eos qui eaque odio minus, culpa quibusdam
            consequatur!',
            'author' => 'Valentino'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vel facilis
            numquam et quos maiores nemo, quasi deserunt debitis officia assumenda quisquam accusamus corporis inventore
            est quo fugit nam quaerat?',
            'author' => 'Valentino'
        ],
    ]]);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque totam tenetur ullam
            illo soluta. Non soluta ipsum officiis maiores, ullam illum beatae eos qui eaque odio minus, culpa quibusdam
            consequatur!',
            'author' => 'Valentino'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt vel facilis
            numquam et quos maiores nemo, quasi deserunt debitis officia assumenda quisquam accusamus corporis inventore
            est quo fugit nam quaerat?',
            'author' => 'Valentino'
        ],
    ];
    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
