<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //

    public function __construct() {
        $this->middleware('auth');
    }
    public function inicio(){
        return view('inicio');
    }
}
