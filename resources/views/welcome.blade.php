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
			
			<div class=" bg-blue-300 flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
			<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class=" bg-blue-300 block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
				<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
			</div>
			<div class="relative text-white text-center px-6 pb-6 mt-6">
				
				<a href="{{route('malaquita.piedra1')}}">Malaquita</a>

			</div>
			</div>

					<div class=" bg-blue-300 flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
						<div class="relative pt-10 px-10 flex items-center justify-center">
						<div class=" bg-blue-300 block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
						<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
						</div>
						<div class="relative text-white text-center px-6 pb-6 mt-6">
						
						<a href="{{route('malaquita.piedra1')}}">Malaquita</a>
				
						</div>
					</div>

			<div class=" bg-blue-300 flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
				<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class=" bg-blue-300 block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
				<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
				</div>
				<div class="relative text-white text-center px-6 pb-6 mt-6">
				
				<a href="{{route('malaquita.piedra1')}}">Malaquita</a>
		
				</div>
			</div>
		
		</div>
{{-- imagenes con piezas FIN --}}



{{-- footer---- --}}
  <footer>

    <nav id="footer" class="bg-gray-500">

        <!-- start container -->
        <div class="container mx-auto pt-5 pb-4">
    
            <div class="flex flex-wrap overflow-hidden sm:-mx-1 md:-mx-px lg:-mx-2 xl:-mx-2">
    
                <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                    <!-- Column 1 Content -->
                    <img style="max-width: 70%;height:auto;" class="" src="https://pngimage.net/wp-content/uploads/2019/05/fake-logo-png-.png" alt="Logo">
                </div>
    
                <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                    <!-- Column 2 Content -->
    
    
                    <h4 class="text-white">Important</h4>
                    <ul class="nav navbar-nav">
                        <li id="navi-2" class="leading-7 text-sm">
                            <a class="text-white underline text-small" href="/page-1">
                                Page 1 </a>
                        </li>
                        <li id="navi-1" class="leading-7 text-sm"><a class="text-white underline text-small" href="/page-2">Page 2</a></li>
                    </ul>
    
    
                </div>
    
                <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                    <!-- Column 3 Content -->
                    <h4 class="text-white">Info</h4>
                    <ul class="">
                    <li id="navi-2" class="leading-7 text-sm">
                        <a class="text-white underline text-small" href="/page-1">
                            Page 1 </a>
                    </li>
                    <li id="navi-1" class="leading-7 text-sm"><a class="text-white underline text-small" href="/page-2">Page 2</a></li>
                    </ul>
                </div>
    
                <div class="w-full overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 pb-6">
                    <!-- Column 4 Content -->
    
                    <h4 class="text-white">Products</h4>
                    <ul class="">
                    <li id="navi-2" class="leading-7 text-sm">
                        <a class="text-white underline text-small" href="/page-1">
                            Page 1 </a>
                    </li>
                    <li id="navi-1" class="leading-7 text-sm"><a class="text-white underline text-small" href="/page-2">Page 2</a></li>
                    </ul>
                </div>
    
            </div>
    
    
    
            <!-- Start footer bottom -->
    
            <div class="pt-4 md:flex md:items-center md:justify-center " style="border-top:1px solid white">
                <ul class="">
                    <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/disclaimer">Disclaimer</a></li>
                    <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/cookie">Cookie policy</a></li>
                    <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/privacy">Privacy</a></li>
                    </ul>
                </div>
    
    
            <!-- end container -->
            </div>
    
    
    
    </nav>
  </footer>
  
@endsection




