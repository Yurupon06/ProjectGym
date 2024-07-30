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

        //
        return view('productcategories.index', [
            'productcat' => product_categorie::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('productcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        //
        $productcat = Product_categorie::findOrFail($id);
        return view('productcategories.edit', compact('productcat'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
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
    

        return redirect()->route('productcategories.index')->with('success', 'productcat created successfully!.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $productcat = Product_categorie::findOrFail($id);
        $productcat->delete();
        return redirect()->route('productcategories.index')->with('success', 'Product Categories deleted successfully!.');

    }
}
