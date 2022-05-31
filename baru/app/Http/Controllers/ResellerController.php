<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerController extends Controller{
    public function reseller(){
        return view(view: 'reseller');
    }
}