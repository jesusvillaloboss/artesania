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
    public function mostrar(piece $piece){ //Envia los datos del producto que seleccionas y lo almacena en piece

          
            $all = piece::find($piece->id)->coments->sortByDesc('id'); //obtienes todos los registros pertenecientes a ese producto
            
            $v = $all->take(3);  //esos datos (array) se buscan sus comentarios relacionados y se almacenan solo 3 con take
        
        return view('piedras.malaquita.malashow',compact('piece','v','all')); //v se envia solo 3 comentarios, all se envian todos y piece es para obtener el campo piece_id que se usara en el form 

        
    }
    public function store(Request $request){ //Almacena los datos del form (agregar comentario) en la variable request

            
            $coment = coment::create($request->all()); //obtiene los datos del form junto con el piece_id y los registra en el producto correspondiente
        
            $v = piece::find($request->piece_id); //Se busca la informacion del producto para obtener el slug
        
        return redirect()->route('malaquita.mostrar',$v->slug); //El slug permite redireccionar a el producto una vez guardado el comentario nuevo
        
    }

    public function nuevo (){
        $pie = piece::OrderBy('id','desc')->paginate();
        $nuevo = $pie->take(5);
       

        return view('piedras.nuevo',compact('nuevo'));
    }
    
}
