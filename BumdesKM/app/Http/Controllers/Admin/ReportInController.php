<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReportInRequest;
use App\Models\Mobile\TransactionDetail;
use App\ReportIn;
use App\TransactionIn;
use App\Product;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class ReportInController extends Controller
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

        return view('pages.admin.reportin.index', compact('product', 'brg_msk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.admin.reportin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportInRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        ReportIn::create($data);
        return redirect()->route('reportin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = ReportIn::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.reportin.detail', [
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
        $item = ReportIn::findOrFail($id);

        return view('pages.admin.reportin.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportInRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        $item = ReportIn::findOrFail($id);
        $item->update($data);

        return redirect()->route('reportin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ReportIn::findOrFail($id);
        $item->delete();

        return redirect()->route('reportin.index');
    }

    public function date(Request $request){
            $from = $request->from;
            $to = $request->to;
        $brg_msk = TransactionIn::whereBetween('tgl_masuk',[$from, $to])->get();
        return view('pages.admin.reportin.index',['brg_msk' => $brg_msk]);
    }

}
