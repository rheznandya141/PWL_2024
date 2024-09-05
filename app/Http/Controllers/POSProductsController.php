<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSProductsController extends Controller
{
    public function foodBeverage() {
       return view('POS.FoodBeverage');
    }

    public function beautyHealth() {
        return view('POS.BeautyHealth');
    }

    public function homeCare() {
        return view('POS.HomeCare');
    }

    public function babyKid() {
        return view('POS.BabyKid');
    }
}