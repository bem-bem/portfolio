<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
        return view('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::pluck('name', 'id')]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        dd($validated);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
