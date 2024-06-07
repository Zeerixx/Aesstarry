<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('home');
    }
    public function detail() {
        return view('detail');
    }
    public function keranjang() {
        return view('keranjang');
    }
    public function summary() {
        return view('summary');
    }
    public function main() {
        return view('home');
    }
}
