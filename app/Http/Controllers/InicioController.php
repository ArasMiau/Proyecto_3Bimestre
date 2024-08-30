<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
<<<<<<< HEAD
    public function __construct() {
        $this->middleware('auth');
    }

    public function inicio() {
=======
    //
<<<<<<< HEAD
    public function __contructor(){
=======

    public function __construct() {
>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
        $this->middleware('auth');
    }
    public function inicio(){
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
        return view('inicio');
    }
}
