<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // return view('pages.product');
        $items = Product::all();

        return view('pages.product', [
            'items' => $items
        ]);
    }
}
