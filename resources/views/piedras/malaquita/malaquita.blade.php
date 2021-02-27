@extends('layouts.plantilla')
@extends('layouts.header')
@extends('layouts.footer')

@section('title', 'Malaquita')

@section('content')


  <div>
      <section class=" text-gray-200  ">
          <div class="max-w-6xl mx-auto px-5 py-14 ">
            <div class="flex flex-wrap w-full mb-18 flex-col items-center text-center -mt-8 ">
              <h1 class=" text-black title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">Malaquita</h1>
              <p class="lg:w-1/2 w-full leading-relaxed text-black">
                Enseigner c'est apprendre deux fois. J'aime partager mes connaissances et mes découvertses.
              </p>
            </div>

            {{-- MUESTRA LOS PRODUCTOS INICIO --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 text-center"> 
              {{-- primero --}}

              @foreach ($pie as $piece) 

              <div class=" mb-5"> {{-- se colocaron las clases para colocarlo en medio --}} 
                
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                    <div class="bg-white rounded-lg mt-5">
                      <img src="img/malaquita2.jpg" class="h-40 rounded-md" alt="" />
                    </div>
 
                        <!-- scale INICIO -->
                            <div class="h-32 relative  mb-5 -mt-4 w-64 text-center ">
                                      <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl" style="background: #cae4db;"></div>
                              <div class="absolute inset-0 transform  hover:scale-75 transition duration-300">
                                  <div class="h-full w-full bg-white text-black rounded-lg shadow-2xl" style="background: #cae4db;">
                                      {{-- AGREGADO --}}
                                      <div class="m-5">

                                        <a href="{{route('malaquita.mostrar', $piece)}}" class="font-bold text-black text-lg">{{$piece->name}}</a>
                                        <div class="flex items-center justify-between">
                                          <div class="text-sm text-black font-light"> Tamaño : Regular </div>
                                          <div class="text-2xl text-black font-bold"> Precio ${{$piece->price}}</div>
                                        </div>

                                      </div>
                                      {{-- AGREGADO --}}
                                  
                                  </div>
                              </div>
                            </div>
                        <!-- scale FIN -->

                </div>
              </div>
              {{-- primero-fin --}}
              @endforeach
              
            </div>
            {{-- MUESTRA LOS PRODUCTOS FIN --}}



          </div>
      </section>


  </div>
@endsection


    
