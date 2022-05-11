<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', ['categories' => Category::with('user')->get()]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required', 'slug' => 'required|unique:categories,slug']);
        $validated['user_id'] = $request->user()->id;
        Category::create($validated);

        return back()->with('success', 'Category added successfuly.');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', ['categories' => $category]);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate(['name' => 'required', 'slug' => ['required', Rule::unique('categories')->ignore($category)]]);
        $category->update($validated);

        return back()->with('success', 'Category updated successfuly.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category Deleted successfuly.');
    }
}
