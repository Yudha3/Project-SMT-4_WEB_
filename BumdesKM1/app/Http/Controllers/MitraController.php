<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request) {
        return view('pages.mitra');
    }
}
