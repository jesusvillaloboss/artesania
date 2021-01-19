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

        //Envia los datos del producto que seleccionas y lo almacena en piece

       
          $v = piece::find($piece->id); //Encuentra los datos correspondientes al id seleccionado
          $v= $v->coments->take(3); //esos datos (array) se buscan sus comentarios relacionados y se almacenan solo 3 con take
          
            $all = piece::find($piece->id)->coments; //obtienes todos los registros pertenecientes a ese producto
   
        return view('piedras.malaquita.malashow',compact('piece','v','all'));

        
    }
    public function store(Request $request){
        $coment = coment::create($request->all()); //obtiene los datos del form junto con el piece_id y los registra en el producto correspondiente
        $v = piece::find($request->piece_id); //Se busca la informacion del producto para obtener el slug
        return redirect()->route('malaquita.mostrar',$v->slug); //El slug permite redireccionar a el producto una vez guardado el comentario nuevo
        
    }


    
}
