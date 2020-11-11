<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Take the newest posts
        $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();

        return view('welcome', compact('latestPosts'));
    }

}
