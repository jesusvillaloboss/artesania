@extends('layouts.plantilla')
@extends('layouts.header')



@section('title','Clothes')
    
@section('content')



<!-- This example requires Tailwind CSS v2.0+ -->
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
  
	  <div class="mt-10">
		<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
		  <div class="flex">
			<div class="flex-shrink-0">
			  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
				<!-- Heroicon name: globe-alt -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="" />
				</svg>
			  </div>
			</div>
			<div class="ml-4">
			  <dt class="text-lg leading-6 font-medium text-gray-900">
			  <a href="{{route('malaquita.piedra1')}}">Malaquita</a>
			  </dt>
			  <dd class="mt-2 text-base text-gray-500">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
			  </dd>
			</div>
		  </div>
  
		  <div class="flex">
			<div class="flex-shrink-0">
			  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
				<!-- Heroicon name: scale -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
				</svg>
			  </div>
			</div>
			<div class="ml-4">
			  <dt class="text-lg leading-6 font-medium text-gray-900">
				Obsidiana
			  </dt>
			  <dd class="mt-2 text-base text-gray-500">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
			  </dd>
			</div>
		  </div>
  
		  <div class="flex">
			<div class="flex-shrink-0">
			  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
				<!-- Heroicon name: lightning-bolt -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
				</svg>
			  </div>
			</div>
			<div class="ml-4">
			  <dt class="text-lg leading-6 font-medium text-gray-900">
				Cristal
			  </dt>
			  <dd class="mt-2 text-base text-gray-500">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
			  </dd>
			</div>
		  </div>
  
		  <div class="flex">
			<div class="flex-shrink-0">
			  <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
				<!-- Heroicon name: annotation -->
				<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
				</svg>
			  </div>
			</div>
			<div class="ml-4">
			  <dt class="text-lg leading-6 font-medium text-gray-900">
				Jaspe
			  </dt>
			  <dd class="mt-2 text-base text-gray-500">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
			  </dd>
			</div>
		  </div>
		</dl>
	  </div>
	</div>
  </div>

  
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




