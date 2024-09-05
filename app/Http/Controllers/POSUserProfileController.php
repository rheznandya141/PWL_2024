<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSUserProfileController extends Controller
{
    public function user($id, $name) {
        return view('POS.User', ['id' => $id, 'name' => $name]);
    }
}