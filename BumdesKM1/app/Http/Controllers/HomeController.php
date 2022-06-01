<?php

namespace App\Http\Controllers;
use App\Product;
use App\TransactionOut;
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
        return view('pages.home', [
            'items' => $items,
            'product' => Product::count(),
            'transactionout_success' => TransactionOut::where('status', 'SUCCESS')->count()
        ]);
    }
}
