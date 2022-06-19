<?php

namespace App\Http\Controllers;
use App\Product;
use App\TransactionOut;
use App\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Product::with(['galleries'])->get();
        $reviews = Review::with(['transaction', 'user'])->get();
        return view('pages.home', [
            'items' => $items,
            'product' => Product::count(),
            'transactionout_success' => TransactionOut::where('status', 'SUCCESS')->count(),
            'reviews' => $reviews
        ]);
        // return response()->json($reviews);
    }
}
