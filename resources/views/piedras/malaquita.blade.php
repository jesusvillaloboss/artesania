@extends('layouts.plantilla')
@extends('layouts.header')
@extends('layouts.footer')

@section('title', 'Malaquita')

@section('content')


<!-- component -->
<!-- This is an example component -->
  <div>
      <section class=" text-gray-200 bg-gray-900">
          <div class="max-w-6xl mx-auto px-5 py-14 ">
            <div class="flex flex-wrap w-full mb-18 flex-col items-center text-center">
              <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">Malaquita</h1>
              <p class="lg:w-1/2 w-full leading-relaxed text-base">
                Enseigner c'est apprendre deux fois. J'aime partager mes connaissances et mes découvertses.
              </p>
            </div>

            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-center"> 
              {{-- primero --}}
              <div class="col-start-1  sm:col-start-2 mb-5"> {{-- se colocaron las clases para colocarlo en medio --}} 
                
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                    <div class="bg-white rounded-lg mt-5">
                      <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                    </div>
                      <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                        <div class="py-5 px-5">
                          
                          <a href="" class="font-bold text-gray-800 text-lg">Geek Pizza</a>
                                <div class="flex items-center justify-between">
                                  <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                  <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                                </div>
                        </div>
                      </div>
                </div>
              </div>
                {{-- segundo --}}
              <div class=" col-start-1 sm:col-start-1">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>

              {{-- tercero --}}
              <div class="">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>
              {{-- cuarto --}}
              <div class="">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>
              {{-- quinto --}}
              <div class="">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>
              {{-- sexto --}}
              <div class="">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>
              {{-- septimo --}}
              <div class="">
                <div class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center">
                  <div class="bg-white rounded-lg mt-5">
                    <img src="https://source.unsplash.com/MNtag_eXMKw/1600x900" class="h-40 rounded-md" alt="" />
                  </div>
                    <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                      <div class="py-5 px-5">
                        <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                              <div class="flex items-center justify-between">
                                <div class="text-sm text-gray-600 font-light"> Size : Regular </div>
                                <div class="text-2xl text-red-600 font-bold"> $ 8.00</div>
                              </div>
                      </div>
                    </div>
                </div>
              </div>
              
            </div>

          </div>
      </section>

  </div>
@endsection


    
