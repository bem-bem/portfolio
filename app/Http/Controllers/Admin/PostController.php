<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::with('user')->get()]);
    }

    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::pluck('name', 'id')]);
    }

    public function store(PostRequest $postRequest)
    {
        $validated = $postRequest->validated();
        $validated['user_id'] = $postRequest->user()->id;
        $Post = Post::create($validated);

        if ($postRequest->hasFile('thumbnail')) {
            $path = $postRequest->file('thumbnail')->store('post-thumbnails');
            $Post->image()->save(
                Image::make(['path' => $path])
            );
        }

        return back()->with('success', 'A new post has been created.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post, 'categories' => Category::pluck('name', 'id')]);
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }

    public function destroy($id)
    {
        //
    }
}
