<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index', ['categories' => Category::withCount('post')->paginate(10)]);
    }

    public function show(Category $category)
    {
        $recent_posts = Post::latest()->take(5)->get();
        $categories = Category::withCount('post')->orderBy('post_count', 'desc')->take(10)->get();
        $tags = Tag::latest()->take(50)->get();
        return view('categories.show', ['posts' => $category->post()->paginate(10),'categories' => $categories, 'tags' => $tags, 'recent_posts' => $recent_posts]);
    }

}
