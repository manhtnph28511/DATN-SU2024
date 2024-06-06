<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $data = Category::query()->latest('id')->paginate(); // Lấy danh sách các categories
    return view('Admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::query()->create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully!');
    }

    public function edit(string $id)
    {
        $category = Category::query()->findOrFail($id);
        return view('Admin/categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Lưu thông báo vào session
        Session::flash('success', 'Category updated successfully');
        $category = Category::query()->findOrFail($id);
        $category->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    Category::destroy($id);
    return redirect()->route('categories.index');
}
}
