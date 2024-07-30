<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $producat = Product_categorie::all();
        return view('product.create', compact('producat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_category_id' => 'required|integer|exists:product_categories,id',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);
        $product = new Product();
        $product->product_category_id = $request->category_name;
        $product->product_category_id = $request->product_category_id;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'product_category_id' => 'required|integer',
        'product_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
    ]);

    $product = Product::findOrFail($id);
    $product->update($validatedData);

    return redirect()->route('product.index')->with('success', 'Product updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id); 
        $product->delete(); 
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
