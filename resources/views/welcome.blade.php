<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/cursos_en_linea_home.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-60">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bolt text-5xl">Aprende en tu horario en tan solo 10 clases</h1>
                <p class="text-white text-lg mt-2 mb-4">Estudie cualquier tema, en cualquier momento. ¡Explore cursos al precio más bajo!</p>
                
                 @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1  gap-x-6 gap-y-8">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <article class="overflow-hidden rounded-xl shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ asset('img/home/computer-1245714_640.jpg') }}">
                        </a>
                        <header class="mt-2">
                            <h1 class="text-xl text-center text-gray-700">
                                    Partes y Piezas
                            </h1>
                        </header>
                        <p class="ml-2 text-sm text-gray-600 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </article>
                </div>
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <article class="overflow-hidden rounded-xl shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ asset('img/home/workplace-2303851_640.jpg') }}">
                        </a>
                        <header class="mt-2">
                            <h1 class="text-xl text-center text-gray-700">
                                    Diseño Gráfico
                            </h1>
                        </header>
                        <p class="ml-2 text-sm text-gray-600 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </article>
                </div>
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <article class="overflow-hidden rounded-xl shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ asset('img/home/laptop-1209008_640.jpg') }}">
                        </a>
                        <header class="mt-2">
                            <h1 class="text-xl text-center text-gray-700">
                                    Desarrollo Web
                            </h1>
                        </header>
                        <p class="ml-2 text-sm text-gray-600 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </article>
                </div>
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <article class="overflow-hidden rounded-xl shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ asset('img/home/code-1839406_640.jpg') }}">
                        </a>
                        <header class="mt-2">
                            <h1 class="text-xl text-center text-gray-700">
                                    Cursos y Productos
                            </h1>
                        </header>
                        <p class="ml-2 text-sm text-gray-600 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </article>
                </div>
            </div>
        </div>    
    </section>
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel</p>
        <div class="flex items-center justify-center">
          <div class="m-3">
            <a href="{{ route('courses.index') }}" class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
              <span class="mr-2">Catálogo de cursos</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentcolor" d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
              </svg>
            </a>
          </div>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl ">Últimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir aprendiendo a programar</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-2">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                @foreach ($courses as $course)
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                        <x-course-card :course="$course"/>
                    </div>
                @endforeach
            </div>
            
        </div>    
    </section>
</x-app-layout>

