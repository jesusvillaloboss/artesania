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

        

        // agregue coment
          $v = piece::find($piece->id); //Encuentra los datos correspondientes al id seleccionado
          $v= $v->coments->take(3); //esos datos (array) se buscan sus comentarios relacionados y se almacenan solo 3 con take
          
            

         

        return view('piedras.malaquita.malashow',compact('piece','v'));

        
    }


    
}
