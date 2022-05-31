<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiMasukController extends Controller{
    public function transaksimasuk(){
        return view(view: 'transaksimasuk');
    }
}