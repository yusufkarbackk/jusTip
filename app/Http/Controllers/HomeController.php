<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class HomeController extends Controller
{
    public function index() {
        $tokos = Toko::all();
        return view('pages.home', ['tokos' => $tokos]);
    }
}
