<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscreverController extends Controller
{
    public function indexEscrever() {
        return view('escrever'); 
    }
}
