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
<<<<<<< HEAD
        $categories = Product_categorie::all();
        return view('productcategories.index', compact('categories'));
=======
        //
        return view('productcategories.index', [
            'productcat' => product_categorie::all()
        ]);
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
=======
        //
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
        return view('productcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        Product_Categorie::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category added successfully.');
=======
        //
        $request->validate([
            'category_name' => 'required|string|max:255',
            'type' => 'required|string',
            'cycle' => 'required|integer',
        ]);

        
        $productcat = new Product_categorie();
        $productcat->category_name = $request->category_name;
        $productcat->type = $request->type;
        $productcat->cycle = $request->cycle;
        $productcat->save();
    
        return redirect()->route('productcategories.index')->with('success', 'productcat created successfully.');
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
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
<<<<<<< HEAD
        $category = Product_categorie::findOrFail($id);
        return view('productcategories.edit', compact('category'));
=======
        //
        $productcat = Product_categorie::findOrFail($id);
        return view('productcategories.edit', compact('productcat'));
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = Product_categorie::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('productcategories.index')->with('success', 'Product category updated successfully.');
=======
        //
        $request->validate([
            'category_name' => 'required|string|max:255',
            'type' => 'required',
            'cycle' => 'required',
        ]);

        
        $productcat = Product_categorie::findOrFail($id);
        $productcat->category_name = $request->category_name;
        $productcat->type = $request->type;
        $productcat->cycle = $request->cycle;
        $productcat->save();
    
        return redirect()->route('productcategories.index')->with('success', 'productcat created successfully.');
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $category = Product_categorie::findOrFail($id);

        $category->delete();
        
        return redirect()->route('productcategories.index')->with('success', 'Product category deleted successfully.');
=======
        //
        $productcat = Product_categorie::findOrFail($id);
        $productcat->delete();
        return redirect()->route('productcategories.index')->with('success', 'productcat berhasil dihapus.');
>>>>>>> c16c813f9f4ba1933478f17a4f95e270e2f1d852
    }
}
