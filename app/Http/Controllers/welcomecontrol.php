<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting(){
        return view('blog.hello')
        ->with('name','pentol')
        ->with('occupation','Astronaut');
        }

    public function index () {
        return 'Selamat Datang';
    }    public function articles ($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }

}