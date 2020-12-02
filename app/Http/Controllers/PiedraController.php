<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiedraController extends Controller
{
    public function piedra1(){
        return view ('piedras.malaquita');
    }
}
