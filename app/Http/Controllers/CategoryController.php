<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:categories,nama_kategori',
            'deskripsi' => 'nullable',
        ]);

        Category::create($request->only([
            'nama_kategori',
            'deskripsi',
        ]));

        return back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function index()
    {
    $categories = Category::latest()->get();

    return view('categories.index', compact('categories'));
    }

    public function update(Request $request, Category $category)
{
    $validated = $request->validate([
        'nama_kategori' => 'required|unique:categories,nama_kategori,' . $category->id,
        'deskripsi' => 'nullable',
    ]);

    $category->update($validated);

    return redirect()->route('categories.index')
        ->with('success', 'Kategori berhasil diperbarui.');
}

public function destroy(Category $category)
    {
    $category->delete();

    return redirect()->route('categories.index')
        ->with('success', 'Kategori berhasil dihapus.');
    }

    public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}
}