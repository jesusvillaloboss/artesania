@extends('layouts.plantilla')
@extends('layouts.header')

@section('content')

                {{-- MUESTRA DE LA PIEZA Junto con el precio--}}
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


        
        {{-- OPINIONES DEL PRODUCTO --}}
            
       
        {{$piece->id}}
        
         {{-- Comentarios de cada producto --}}
        
         {{-- Comentarios de cada producto fin--}}

                    @if ($v->isEmpty())
                        <div>No hay Comentarios</div>
                    @else
       
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-3 ">
                    <div class="flex items-center justify-between">
                        <h3 class="text-3xl ">OPINIONES DEL PRODUCTO</h3>
                        <h3 class="text-1xl text-blue-400 font-bold ">Ver mas comentarios</h3>

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
        









        {{-- AGREGAR COMENTARIO --}}

        <!-- component -->
        <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
            <div class="py-3 sm:max-w-xl sm:mx-auto">
            <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
                <div class="px-12 py-5">
                <h2 class="text-gray-800 text-3xl font-semibold">Your opinion matters to us!</h2>
                </div>
                <div class="bg-gray-200 w-full flex flex-col items-center">
                <div class="flex flex-col items-center py-6 space-y-3">
                    <span class="text-lg text-gray-800">How was quality of the call?</span>
                    <div class="flex space-x-3">
                    <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-12 h-12 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-12 h-12 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    </div>
                </div>
                <div class="w-3/4 flex flex-col">
                    <textarea rows="3" class="p-4 text-gray-500 rounded-xl resize-none">Leave a message, if you want</textarea>
                    <button class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Rate now</button>
                </div>
                </div>
            
            </div>
        
            
            </div>
        </div>

    </div>
<script src="../js/app.js"></script>
@endsection
