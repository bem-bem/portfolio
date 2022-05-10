<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    private $rules = [
        'title' => 'required',
        'slug' => 'required',
        'category_id' => 'required',
        'thumbnail' => 'required',
        'intro' => 'required',
        'content' => 'required',

    ];
   
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::with('user')->get()]);
    }

    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::pluck('name', 'id')]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        $validated['user_id'] = auth()->user()->id;
        $post = Post::create($validated);
        if ($request->has('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extensio = $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->store('post-thumbnail');

            $post->image()->create(['name' => $filename, 'extension' => $file_extensio, 'path' => $path]);
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
