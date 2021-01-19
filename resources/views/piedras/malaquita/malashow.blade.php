@extends('layouts.plantilla')
@extends('layouts.header')
@section('content')
<link rel="stylesheet" href="../css/style.css">

                {{-- MUESTRA DE LA PIEZA Junto con el precio INICIO--}}
    <div class="bg-gray-300">
            <div class="container mx-auto py-20 ">
                <div class="grid grid-cols-1 sm:grid-cols-3  gap-4  ">
                        <div class="  col-span-1 sm:col-span-2  ">
                            <img class=" w-full max-h-full pb-8 rounded-lg  " src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />

                        </div>
                    <div class=" rounded-lg border-8 border-gray-800">
                        <h1 class="text-center text-4xl mb-3">{{$piece->name}}</h1>
                        <p class="text-justify mb-10">Descripcion : {{$piece->description}}</p>

                            <p class="text-3xl  font-bold  mb-10">Precio ${{$piece->price}}</p>
                                <div class="grid ...">
                                
                                    <div class="justify-self-center ...">
                                        <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 bg-gray-800 hover:bg-gray-800 mt-4 lg:mt-0">Comprar</a>
                            
                                    </div>
                                </div>
                    </div>
                    
                    
                    
                </div>
            </div>
                {{-- MUESTRA DE LA PIEZA Junto con el precio fin--}}


        
            {{------------- OPINIONES DEL PRODUCTO INICIO--}}
            
       
        {{$piece->id}}
        
        {{-- Comentarios de cada producto INICIO--}}
        
         

                    @if ($v->isEmpty())
                        <div>No hay Comentarios</div>
                    @else
       
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-3 ">
                    <div class="flex items-center justify-between">
                        <h3 class="text-3xl ">OPINIONES DEL PRODUCTO</h3>
                        
                        <button  onclick="document.getElementById('myModal').showModal()" id="btn" class="text-1xl text-blue-400 font-bold">Ver mas comentarios</button>
                    </div>



                    @foreach ($v as $comentario) 
                        <div class="border-8 border-gray-800 rounded-lg">
                            <div class="flex items-start px-4 py-6 ">
                                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-gray-900 -mt-1"> {{$comentario['titulo']}}</h2>
                                    </div>
                                    <p class="text-gray-700">Publicado: {{$comentario->created_at}} </p>
                                    <p class="mt-3 text-gray-700 text-sm">COMENTARIO: {{$comentario->comen}}</p>
                                </div>
                            </div>             
                        </div>
                    @endforeach
       
                    @endif
                </div>
            </div>
        
        {{-- Comentarios de cada producto fin--}}

                {{-- MODAL EMERGENTE DE LOS COMENTARIOS INICIO--}}

            <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                
                <div class="flex flex-col w-full h-auto ">
                        <!-- Header -->
                    <div class="flex w-full h-auto justify-center items-center">
                        <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                            OPINIONES DEL PRODUCTO
                        </div>
                        <div onclick="document.getElementById('myModal').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </div>
                        <!--Header End-->
                    </div>
                    <!-- Modal Content-->
                    <div class="overflow-y-scroll grid grid-cols-1 gap-3 h-96  ">
                    
                        @foreach ($all as $comentarioall) 
                        <div class="border-4 border-gray-800 rounded-lg">
                            <div class="flex items-start px-4 py-3 ">
                                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-gray-900 -mt-1"> {{$comentarioall['titulo']}}</h2>
                                    </div>
                                    <p class="text-gray-700">Publicado: {{$comentarioall->created_at}} </p>
                                    <p class="mt-3 text-gray-700 text-sm">COMENTARIO: {{$comentarioall->comen}}</p>
                                </div>
                            </div>             
                        </div>
                    @endforeach









                        
                    </div>
                    <!-- End of Modal Content-->
                    
                    
                    
                </div>
            </dialog>
                
                {{-- MODAL EMERGENTE DE LOS COMENTARIOS FIN--}}

            {{-------------- OPINIONES DEL PRODUCTO FIN--}}

        {{-- AGREGAR COMENTARIO --}}

                    


                
                <div class=" p-5 flex items-center justify-center ">
                    <div class="border border-gray-800 shadow-sm px-4 py-3 rounded-lg max-w-lg">
                       
                        <h3 class="text-3xl text-center ">DEJAR UN COMENTARIO</h3>

                    <form action="{{route('malaquita.store')}}" method="POST">
    
                            {{-- token de seguridad --}}
                            @csrf 
    
                        <label class="">
                            Titulo:
                            
                            <input type="text" name="titulo">
                        </label>
                            <br>
                            Descripcion:
                            <br>
                            
                            <textarea class="mb-2" name="comen" rows="2" cols="50" placeholder="Escriba algo"></textarea>
    
                        <br>
                        <input type="hidden" id="" name="piece_id" value="{{$piece->id}}">



                        <button type="submit"  class="inline-block text-sm px-4 py-2 leading-none border rounded text-white bg-gray-800 hover:border-transparent hover:text-teal-500 hover:bg-blue-600 mt-4 lg:mt-0">
                            Enviar</button>
                    </form>



                    </div>
                </div>










        

    </div>
<script src="../js/app.js"></script>
@endsection
