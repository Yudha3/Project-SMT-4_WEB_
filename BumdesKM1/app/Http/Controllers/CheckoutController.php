<?php

namespace App\Http\Controllers;

use App\TransactionOut;
use App\TransactionDetail;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id) {
        $item = TransactionOut::with(['details','products','user'])->findOrFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    public function process(Request $request, $id, $id_transaction) {
        $product = Product::findOrFail($id);
        $transactiondetail = TransactionDetail::findOrFail($id_transaction);
        $transactionout = TransactionOut::create([
            'id_users' => Auth::user()->id,
            'date' => Carbon::now()->addYears(5),
            'recipient' => Auth::user()->name,
            'address' => '',
            'phone' => '',
            'total' => $transactiondetail->subtotal,
            'resi' => '',
            'status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'id_transaction' => $transactionout->id,
            'id_product' => $id,
            'qty' => 1,
            'price' => $product->price,
            'subtotal' => 'qty * price',

        ]);

        return redirect()->route('checkout', $transactionout->id);
    }

    public function remove(Request $request, $detail_id) {
        
    }

    public function create(Request $request, $id) {
        $request->validate([
            'address' => 'required',
            'phone' => 'required|max:12',
            'qty' => 'required|integer'
        ]);

        $data = $request->all();
        $data['id_transaction'] = $id;

        TransactionDetail::create($data);

        $transactionout = TransactionOut::with(['product'])->find($id);

        if($request->total) {
            $transactionout->total += 1;
        }
    }

    public function success(Request $request, $id) {
        return view('pages.success');
    }
}
