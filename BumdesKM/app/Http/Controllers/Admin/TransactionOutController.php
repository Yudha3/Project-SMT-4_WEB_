<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionOutRequest;
use App\TransactionOut;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TransactionOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TransactionOut::with([
            'details', 'user', 'payment'
        ])->get();

        return view('pages.admin.transactionout.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.admin.transactionout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionOutRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        TransactionOut::create($data);
        return redirect()->route('transactionout.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = TransactionOut::with([
            'details', 'user', 'payment'
        ])->findOrFail($id);

        return view('pages.admin.transactionout.detail', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $item = TransactionOut::findOrFail($id);
        // if ($request->status=='ON_PROCESS') {
        //     $status = 'VALID';
        // } else if ($request->status=='CANCEL') {
        //     $status = 'INVALID';
        // }
        if ($item->status == 'ON_PROCESS') {
            $validation = '';
        } else {
            $validation = 'readonly';
        }

        return view('pages.admin.transactionout.edit', [
            'item' => $item,
            'validation' => $validation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionOutRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        $item = TransactionOut::findOrFail($id);
        if ($request->status =='ON_PROCESS') {
            $status = 'VALID';
        } else if ($request->status =='CANCEL') {
            $status = 'INVALID';
        } else {
            $status = 'UNKNOWN';
        }
        Payment::where('id_transaction', $id)->update([
            'status' => $status
        ]);
        $item->update($data);

        return redirect()->route('transactionout.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TransactionOut::findOrFail($id);
        $item->delete();

        return redirect()->route('transactionout.index');
    }
}
