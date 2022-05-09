<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartasPublicasController extends Controller
{
    public function cartasPublicasHome() {
        return view('cartas-publicas'); 
    }
}
