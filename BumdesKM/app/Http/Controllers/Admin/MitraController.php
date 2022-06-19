<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MitraRequest;
use App\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Mitra::all();

        return view('pages.admin.mitra.index', [
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
        return view('pages.admin.mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MitraRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_mtr);
        $data['image'] = $request->file('image')->store(
            'assets/mitra', 'public'
        );

        Mitra::create($data);
        return redirect()->route('mitra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Mitra::findOrFail($id);

        return view('pages.admin.mitra.edit', [
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
    public function update(MitraRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_mtr);
        $data['image'] = $request->file('image')->store(
            'assets/mitra', 'public'
        );

        $item = Mitra::findOrFail($id);
        $item->update($data);

        return redirect()->route('mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Mitra::findOrFail($id);
        $item->delete();

        return redirect()->route('mitra.index');
    }
}
