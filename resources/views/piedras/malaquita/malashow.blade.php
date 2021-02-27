@extends('layouts.plantilla')
@extends('layouts.header')
@section('content')
<link rel="stylesheet" href="../css/style.css">

                {{-- MUESTRA DE LA PIEZA Junto con el precio INICIO--}}
    
            <div class="container mx-auto py-20 ">
                <div class="grid grid-cols-1 lg:grid-cols-3 -mt-10 mx-8  lg:mx-4 gap-4  ">
                        <div class=" mx-auto  col-span-1 sm:col-span-2  " >
                            
                            <img  id="img_02" class=" w-96 h-96  pb-8 rounded-md" src="../img/malaquita2.jpg"  alt="" />
                         
                            
                            
                        </div>

                    <div class="  rounded-lg  border-4 border-opacity-80  shadow-2xl  border-gray-800" >
                        <div style="background: #cae4db;">
                            <h1 class=" border-b-4  border-gray-400 border-fuchsia-600 text-center text-4xl mb-3 text-opacity-20" style="word-break:break-all;">{{$piece->name}}</h1>

                        </div>
                        <p class="text-justify mb-10"style="word-break:break-all;">Descripcion : {{$piece->description}}</p>

                            <p class="text-3xl  font-bold -mb-4 lg:mb-4">Precio ${{$piece->price}}</p>
                                <div class="grid ...">
                                
                                    <div class="justify-self-center m-8 lg:m-2 ">
                                        <a href="#" class="inline-block text-sm px-4 py-2  leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 bg-gray-800 hover:bg-gray-800 mt-4 lg:mt-0">Comprar</a>
                            
                                    </div>
                                </div>
                    </div>
                    
                    
                    
                </div>
            </div>
                {{-- MUESTRA DE LA PIEZA Junto con el precio fin--}}


        
            
            
       
        {{$piece->id}}
        
        {{-- Comentarios de cada producto  MUESTRA 3 INICIO--}}
    
                    @if ($v->isEmpty())
                        

                    <div class="mt-4"></div>
                    <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-blue-700 bg-blue-100 border border-blue-300 ">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info w-5 h-5 mx-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                        </div>
                        <div class="text-xl font-normal  max-w-full flex-initial">
                            <div class="py-2">NO hay comentarios sobre el producto
                                <div class="text-sm font-base">¡Se el primero en dejar una opinion!</div>
                            </div>
                    </div>


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
        
        {{-- Comentarios de cada producto  MUESTRA 3 FIN--}}




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

            

        {{-- AGREGAR COMENTARIO --}}
                                               
             <div class=" p-8">
                <div class="shadow-2xl p-5 ">
                    <div class=" container mx-auto  max-w-md w-full lg:flex ">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('../img/mayaescribe.jpg')" title="Woman holding a mug">
                            </div>
                            
                        <div class="  border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8 ">
                            
                                    <div class="text-black font-bold text-xl mb-2">DEJA UN COMENTARIO</div>
                                <form action="{{route('malaquita.store')}}" method="POST">
                            
                                        {{-- token de seguridad --}}
                                        @csrf 
                
                                    <label class="">
                                        Titulo:
                                        
                                        <input type="text" name="titulo" >
                                    </label>
                                        <br>
                                        Descripcion:
                                        <br>
                                        
                                        <textarea class="mb-2" name="comen" rows="2" cols="40" placeholder="Escriba algo"></textarea>
                
                                    <br>
                                    <input type="hidden" id="" name="piece_id" value="{{$piece->id}}">



                                    <button type="submit"  class="inline-block text-sm px-4 py-2 leading-none border rounded text-white bg-gray-800 hover:border-transparent hover:text-teal-500 hover:bg-blue-600 mt-4 lg:mt-0">
                                        Enviar</button>
                                </form>
                            </div>

                        </div>

                        
                    </div>
                </div>
             </div>

        {{-- AGREGAR COMENTARIO-FIN --}}





                {{-- LUPA DE PRODUCTO-INICIO --}}


                    <script src="../js/jquery.js" type="text/javascript"></script>
                    <script src="../js/jquery.imageLens.js" type="text/javascript"></script>
                    <script type="text/javascript" language="javascript">
                            $(function () {
                                $("#img_01").imageLens();
                                $("#img_02").imageLens({ lensSize: 200 });
                                $("#img_03").imageLens({ imageSrc: "sample01.jpg" });
                                $("#img_04").imageLens({ borderSize: 8, borderColor: "#06f" });
                            });	
                    </script>

                    <script type="text/javascript">
                                (function(){
                                var bsa = document.createElement('script');
                                bsa.type = 'text/javascript';
                                bsa.async = true;
                                bsa.src = '//s3.buysellads.com/ac/bsa.js';
                                (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
                                })();
                    </script>

                    <script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));	</script>	<script type="text/javascript">	try{var pageTracker = _gat._getTracker("UA-2030729-5");pageTracker._initData();pageTracker._trackPageview();}catch(ex){}</script>

                {{-- LUPA DE PRODUCTO-FIN --}}




            <footer>

                    <div class="bg-gray-100">
                        <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
                        <div class="p-5 w-48 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Home</div>
                            <a class="my-3 block" href="/#">Services <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Products <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">About Us <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Pricing <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Partners <span class="text-teal-600 text-xs p-1">New</span></a> 
                        </div>
                        
                        <div class="p-5 w-48 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Product</div>
                            <a class="my-3 block" href="/#">Our Products <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Great Deals <span class="text-teal-600 text-xs p-1">New</span></a><a class="my-3 block" href="/#">Analytics <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Mobile <span class="text-teal-600 text-xs p-1"></span></a> 
                        </div>
                        <div class="p-5 w-48 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Support</div>
                            <a class="my-3 block" href="/#">Help Center <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Privacy Policy <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Conditions <span class="text-teal-600 text-xs p-1"></span></a> 
                        </div>
                        <div class="p-5 w-48 ">
                            <div class="text-xs uppercase text-gray-500 font-medium">Contact us</div>
                            <a class="my-3 block" href="/#">XXX XXXX, Floor 4 San Francisco, CA <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">contact@company.com <span class="text-teal-600 text-xs p-1"></span></a> 
                        </div>
                        </div>
                    </div>
                 
                 
            </footer>
              


        

  
<script src="../js/app.js"></script>

@endsection
