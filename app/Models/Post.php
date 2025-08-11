<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
