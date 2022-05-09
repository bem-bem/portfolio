<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show(Tag $tag)
    {
        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::withCount('post')->orderBy('post_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();
        return view('tags.show', ['posts' => $tag->post()->paginate(10), 'categories' => $categories, 'tags' => $tags, 'recent_posts' => $recent_posts]);
    }
}
