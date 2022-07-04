<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request) {
        $items = About::all();
        return view('pages.about', [
            'items' => $items
        ]);
    }
}
