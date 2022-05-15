<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at','desc')->paginate(6);

        return view('welcome', compact('posts'));
    }
}
