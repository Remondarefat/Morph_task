<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Create a new user
    $user = User::create([
        'name' => 'test user' . rand(0, 1999),
        'email' => 'email' . rand(0, 1999) . '@gmail.com',
        'password' => '12345678'
    ]);

    // Create an image related to the user
    $user->image()->create([
        'url' => 'image/url/image' . rand(0, 1111) . 'png',
    ]);

    // Create a new post
    $post = Post::create([
        'title' => 'test post' . rand(0, 1999)
    ]);

    // Create an image related to the post
    $post->image()->create([
        'url' => 'image/url/image' . rand(0, 1111) . 'png',
    ]);

    return view('welcome');
});
