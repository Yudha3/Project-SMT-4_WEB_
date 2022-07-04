<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanMasukController extends Controller{
    public function laporanmasuk(){
        return view(view: 'laporanmasuk');
    }
}