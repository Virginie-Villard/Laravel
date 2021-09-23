<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productsByName()
    {
        $products = Product::orderBy('name')->get();
        return view('product-list', array('products'=>$products));
    }

    public function productsByPrice()
    {
        $products = Product::orderBy('price')->get();
        return view('product-list', array('products'=>$products));
    }
    
    public function productId($id)
    {
        $product = Product::where('id', $id)->first();
        if($product) {
            return view('product-details', array('product'=>$product));
        }
        else {
            return view('error');
        }
        
    }
}
