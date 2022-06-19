<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReportOutRequest;
use App\ReportOut;
use App\TransactionIn;
use App\TransactionOut;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReportOutController extends Controller
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

        return view('pages.admin.reportout.index', [
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
        // return view('pages.admin.reportout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportOutRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        ReportOut::create($data);
        return redirect()->route('reportout.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = ReportOut::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.reportout.detail', [
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
        $item = ReportOut::findOrFail($id);

        return view('pages.admin.reportout.edit', [
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
    public function update(ReportOutRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->recipient);

        $item = ReportOut::findOrFail($id);
        $item->update($data);

        return redirect()->route('reportout.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ReportOut::findOrFail($id);
        $item->delete();

        return redirect()->route('reportout.index');
    }
    public function tgl(Request $request){
        $from = $request->from;
        $to = $request->to;
    $items = TransactionOut::whereBetween('date',[$from, $to])->get();
    return view('pages.admin.reportout.index',['items' => $items]);
}
}
