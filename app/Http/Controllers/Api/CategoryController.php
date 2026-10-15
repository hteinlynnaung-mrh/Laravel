<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:sanctum");
        // close the category controller with the sanctum
    }

    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->name;
        if($name == "") {
            return response(['msg' => 'name requried'], 400);
        }

        // Category::create(['name' => $name]); (show form for below)

        $category = new Category;
        $category->name = $name;
        $category->save();

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $name = $request->name;
        if($name == "") {
            return response(['msg' => 'name requried'], 400);
        }

        // Category::create(['name' => $name]); (show form for below)

        $category->name = $name;
        $category->save();

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $category;
    }
}
