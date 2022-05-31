<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiKeluarController extends Controller{
    public function transaksikeluar(){
        return view(view: 'transaksikeluar');
    }
}