<?php

namespace App\Http\Controllers;

use App\Models\coment;
use App\Models\piece;
use Illuminate\Http\Request;

class PiedraController extends Controller
{
    public function piedra1(){
            // obtienes los productos de la tabla piece
        $pie = piece::OrderBy('id','desc')->paginate();
        return view ('piedras.malaquita.malaquita',compact('pie'));
    }
    public function mostrar(piece $piece){

        $coment = coment::OrderBy('id','desc')->paginate();

        // agregue coment
          $v = piece::find($piece->id)->coments;

        return view('piedras.malaquita.malashow',compact('piece','v'));

        
    }


    
}
