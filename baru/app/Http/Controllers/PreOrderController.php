<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreOrderController extends Controller{
    public function preorder(){
        return view(view: 'preorder');
    }
}