<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all()->sortBy('price');
        return view('product-list', array('products'=>$products));
    }

    
    public function productId($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product-details', array('product'=>$product));
    }
}
