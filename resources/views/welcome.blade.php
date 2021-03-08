@extends('layouts.plantilla')
@extends('layouts.header')



@section('title','Clothes')
    
@section('content')
{{-- carousel INICIO --}}
		<header class="bg_animate">
			

			<section class="banner contenedor">
				<section class="banner_title">
					<h2>Compra Las Mejores  <br> ARTESANIAS</h2>
					<a href="{{route('nuevo')}}" class="llamanos">Lo Mas Nuevo!</a>
				</section>
				<div class="banner_img">
					<img src="img/artesanias-1.png" class="object-cover h-full   rounded-md" alt="">
				</div>
			</section>

			<div class="burbujas">
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
			</div>
		</header>
{{-- carousel FIN --}}

{{-- TARGET CON TITULO INICIO --}}
	<div class="py-12 bg-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="lg:text-center">
				<h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2>
				<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
				Todo tipo de piedra artesanal
				</p>
				<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
				Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
				</p>
			</div>			
		</div>
	</div>
{{-- TARGET CON TITULO FIN --}}



{{-- imagenes con piezas INICIO --}}
		<div class=" pb-24 flex flex-wrap items-center justify-center">
			
			<div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg" style="background: #cae4db;">
			<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class="  block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
				<img class="relative w-40" src="img/malaquita.png" alt="">
			</div>
			<div class="relative text-black text-center px-6 pb-6 mt-6">
				
				<a href="{{route('malaquita.piedra1')}}">Malaquita</a>

			</div>
			</div>

					<div class="  flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg" style="background: #cae4db;">
						<div class="relative pt-10 px-10 flex items-center justify-center">
						<div class="  block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
						<img class="relative w-40" src="img/malaquita.png" alt="">
						</div>
						<div class="relative text-black text-center px-6 pb-6 mt-6">
						
						<a href="{{route('malaquita.piedra1')}}">Malaquita</a>
				
						</div>
					</div>

			<div class=" flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg" style="background: #cae4db;">
				<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class="  block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
				<img class="relative w-40" src="img/malaquita.png" alt="">
				</div>
				<div class="relative text-black text-center px-6 pb-6 mt-6">
				
				<a href="{{route('malaquita.piedra1')}}">Malaquita</a>
		
				</div>
			</div>
		
		</div>
{{-- imagenes con piezas FIN --}}



{{-- footer---- --}}
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
  
@endsection




