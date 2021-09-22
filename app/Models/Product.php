<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'PRODUCT';

    public function getProducts() {
        return $items = Product::all()->orderBy('price');
        // Cette ligne est équivalente à select * from articles trié par prix
    }

    public function getProduct($id) {
        // Trouve un article dans la DB :
        return $item = Product::find($id);
    }
}
