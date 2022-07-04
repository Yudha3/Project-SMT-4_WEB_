<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\TransactionOut;

class DashboardController extends Controller
{
    public function index(Request $request) {
        return view('pages.admin.dashboard', [
            'product' => Product::count(),
            'transactionout' => TransactionOut::count(),
            'transactionout_pending' => TransactionOut::where('status', 'PENDING')->count(),
            'transactionout_success' => TransactionOut::where('status', 'SUCCESS')->count()
        ]);
    }
}
