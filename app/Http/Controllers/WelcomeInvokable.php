<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeInvokable extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::withCount('comment')->paginate(10);
        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::withCount('post')->orderBy('post_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();
        return view('welcome', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags, 'recent_posts' => $recent_posts]);
    }
}
