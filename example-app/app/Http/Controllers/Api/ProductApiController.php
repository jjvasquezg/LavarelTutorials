<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    public function show(string $id): JsonResponse
    {
        $product = Product::findOrFail($id);

        return response()->json($product, 200);
    }

    public function save(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|gte:0.01',
        ]);

        $product = Product::create($request->only(['name', 'price']));

        return response()->json([
            'message' => 'Product created successfully!',
            'product' => $product
        ], 201);

    }
}
