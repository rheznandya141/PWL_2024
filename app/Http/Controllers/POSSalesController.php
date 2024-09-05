<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSSalesController extends Controller
{
    public function sales() {
        return view('POS.Sales');
    }
}