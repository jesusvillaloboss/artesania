@extends('layouts.plantilla')
@extends('layouts.header')

@section('content')

<div class="container mx-auto py-20 ">
    
        <div class="grid grid-cols-1 sm:grid-cols-3  gap-4  ">
                <div class="  col-span-1 sm:col-span-2  ">
                    <img class=" w-full max-h-full pb-8   " src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />

                </div>
            <div class=" rounded-lg border-8 border-gray-800">
                <h1 class="text-center text-4xl mb-3">{{$piece->name}}</h1>
                <p class="text-justify mb-10">Descripcion : {{$piece->description}}</p>

                    <p class="text-3xl  font-bold mr-3 mb-5">Precio ${{$piece->price}}</p>
                        <div class="grid ...">
                        
                            <div class="justify-self-center ...">
                                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 bg-gray-800 hover:bg-gray-800 mt-4 lg:mt-0">Comprar</a>
                    
                            </div>
                        </div>
            </div>
            
            
            
        </div>
</div>
<p >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga aliquid, eveniet reiciendis accusantium earum aliquam velit ipsum delectus adipisci iusto quia dolores sapiente. Sapiente vitae tenetur suscipit, quidem ab vel.</p>



<script src="../js/app.js"></script>
@endsection
