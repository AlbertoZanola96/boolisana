<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function listProducts() {
        Product::all();
        $paste = Product::all();
        return view('products', compact('paste'));
    }

    public function productDetail($id) {
        /* Select * FROM products WHERE id = $id */
        //$product = Product::where('id', $id)->first();
        $product = Product::find($id);

        return view('dettagli', compact('product'));
    }
}
