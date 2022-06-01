<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $id) {
        $item = Product::with(['galleries'])->where('id', $id)->firstOrFail();
        return view('pages.detail', [
            'item' => $item
        ]);

        // return view('pages.detail');
    }
}
