<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionInRequest;
use App\TransactionIn;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TransactionInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brg_msk = TransactionIn::join('products', 'products.id', '=', 'transaction_ins.id_product')
                    ->select('transaction_ins.*', 'products.title', 'products.price_buy')
                    ->get();

        $product = Product::all();

        return view('pages.admin.transactionin.index', compact('product', 'brg_msk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('pages.admin.transactionin.create', compact('product'));
    }

    public function ajax(Request $request) {
        $id_product['id_product'] = $request->id_product;
        $ajax_product = Product::where('id', $id_product)->get();

        return view('pages.admin.transactionin.ajax', compact('ajax_product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionInRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id_product);

        TransactionIn::create($data);
        $product = Product::find($request->id_product);
        $product->stock += $request->jml_stok;
        $product->save();
        return redirect()->route('transactionin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = TransactionIn::with([
            'products'
        ])->findOrFail($id);

        return view('pages.admin.transactionin.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TransactionIn::findOrFail($id);
        $products = Product::all();

        return view('pages.admin.transactionin.edit', [
            'item' => $item,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionInRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->id_product);

        $item = TransactionIn::findOrFail($id);
        // $product = Product::find($request->id_product);
        // $product->stock -= $request->jml_stok;
        // $product->stock += $request->jml_stok;
        // $product->save();
        $item->update($data);

        return redirect()->route('transactionin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TransactionIn::findOrFail($id);
        $item->delete();

        return redirect()->route('transactionin.index');
    }
}
