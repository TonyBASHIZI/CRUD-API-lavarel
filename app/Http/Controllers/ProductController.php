<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        
        return response()->json(Product::all(),200);
    }
    public function getProductById($id)
    {
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Data not found'],404);
        }

        return response()->json($product);
    }
    public function addProduct(Request $request)
    {
        $product = Product::create($request::all());

        return response($product,200);
    }
}
