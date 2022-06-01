<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionOutRequest;
use App\TransactionOut;
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
            'details', 'user'
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
            'details', 'user'
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
    public function edit($id)
    {
        $item = TransactionOut::findOrFail($id);

        return view('pages.admin.transactionout.edit', [
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
    public function update(TransactionOutRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        $item = TransactionOut::findOrFail($id);
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
