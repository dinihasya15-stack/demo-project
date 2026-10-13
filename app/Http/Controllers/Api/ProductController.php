<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * @group Products
 *
 * CRUD untuk product.
 */
class ProductController extends Controller
{
    /**
     * Senarai product
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Tambah product
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'size' => 'required|exists:size,id',
            'color' => 'required|exists:colors,id',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'size_id' => $request->size,
            'color_id' => $request->color,
        ]);

        return response()->json($product, 201);
    }

    /**
     * Tengok satu product
     */
    public function show(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Kemaskini product
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

        return response()->json($product);
    }

    /**
     * Padam product
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }
}