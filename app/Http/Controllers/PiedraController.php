<?php

namespace App\Http\Controllers;

use App\Models\piece;
use Illuminate\Http\Request;

class PiedraController extends Controller
{
    public function piedra1(){

        $pie = piece::OrderBy('id','desc')->paginate();
        return view ('piedras.malaquita.malaquita',compact('pie'));
    }
    public function mostrar(piece $piece){
        return view('piedras.malaquita.malashow',compact('piece'));
    }
}
