<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function index() {
        return view('cliente.index');
    }
    
    public function crear(){
        return view('cliente.creando');
        
    }
}
