<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datag';
    }

    public function about() {
        return '6366 - pentol';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}