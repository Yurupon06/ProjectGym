<?php

namespace App\Http\Controllers;

use App\Models\Product_categorie;
use Illuminate\Http\Request;

class ProductCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Product_categorie::all();
        return view('productcategories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        Product_Categorie::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product_categorie $product_categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Product_categorie::findOrFail($id);
        return view('productcategories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = Product_categorie::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Product_categorie::findOrFail($id);

        $category->delete();
        
        return redirect()->route('productcategories.index')->with('success', 'Product category deleted successfully.');
    }
}
