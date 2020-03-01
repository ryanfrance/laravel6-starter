<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;

class PostsController extends Controller
{
    public static function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('posts', [
            'post' => $post
        ]);
    }
}
