<?php

namespace Controllers;

use Models\Product;
use Leaf\Http\Request;
use Leaf\Http\Response;

class ProductController
{
    public function index()
    {
        $products = Product::all();
        Response::json($products);
    }

    public function show(Request $request)
    {
        $product = Product::find($request->param('id'));
        Response::json($product);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->body());
        Response::json($product, 201);
    }

    public function update(Request $request)
    {
        $product = Product::find($request->param('id'));
        $product->update($request->body());
        Response::json($product);
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->param('id'));
        $product->delete();
        Response::json(['message' => 'Product deleted']);
    }
}
