<?php

namespace App\Http\Controllers;
use App\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request) {
        // return view('pages.mitra');
        $items = Mitra::all();

        return view('pages.mitra', [
            'items' => $items
        ]);
    }
}
