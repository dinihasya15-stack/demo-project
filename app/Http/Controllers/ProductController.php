<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //display data of products
        $products = Product::all();
        return view('products.index'/*name of route */, compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        $sizes = Size::all();
        return view('products.create', compact('colors', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'size' => 'required|exists:size,id',
            'color' => 'required|exists:colors,id',
        ]);

        Product::create([
            'name' => $request->name,
            'size_id' => $request->size,
            'color_id' => $request->color,
        ]
        );
            
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $colors = Color::all();
        $sizes = Size::all();
        return view('products.edit', compact('product', 'colors', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'size' => 'required|exists:size,id',
            'color' => 'required|exists:colors,id',
        ]);

        $product->update([
            'name' => $request->name,
            'size_id' => $request->size,
            'color_id' => $request->color,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
