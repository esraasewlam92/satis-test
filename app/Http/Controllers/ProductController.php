<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(SaveProductRequest $request)
    {
        $product = Product::create($request->validated());

        return ProductResource::make($product);
    }
}