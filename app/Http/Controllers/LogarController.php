<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogarController extends Controller
{
    public function indexLogar() {
        return view('logar'); 
    }
}
