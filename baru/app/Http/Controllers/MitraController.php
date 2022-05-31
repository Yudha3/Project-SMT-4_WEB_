<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraController extends Controller{
    public function mitra(){
        return view(view: 'mitra');
    }
}