<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKeluarController extends Controller{
    public function laporankeluar(){
        return view(view: 'laporankeluar');
    }
}