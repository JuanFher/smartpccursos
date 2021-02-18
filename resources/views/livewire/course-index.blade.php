<div>
	<div class="bg-gray-200 py-4">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex" >
			<button class="focus:outline-none  bg-white shadow h-12 px-4 rounded-lg text-gray-500 mr-4" wire:click="resetFilters()">
				<i class="fas fa-layer-group text-sm mr-2"></i>
				Todos los Cursos
			</button>
			
			{{-- dropdown Categoría --}}
			<div class="relative inline-block text-left" x-data="{ open: false }"> 
			  <div>
			    <button type="button" class="bg-white shadow h-12 px-4 rounded-lg text-gray-500 mr-4" id="options-menu" aria-haspopup="true" aria-expanded="true" x-on:click="open = !open" >
			    	<i class="fas fa-tags text-sm mr-2"></i>
			      	Categoría
			      	<i class="fas fa-angle-down text-sm ml-2"></i>
			    </button>
			  </div>
			  <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-show="open" x-on:click.away="open = false">
			    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
			      
			      @foreach ($categories as $category)
			      	<a class=" cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 hover:text-gray-900" 
			      		role="menuitem"
			      		wire:click="$set('category_id', {{ $category->id }})"
			      		x-on:click="open = false"
			      		>
			      		{{$category->name}}
			      	</a>
			      @endforeach
			    </div>
			  </div>
			</div>
			{{-- Dropdown Niveles --}}
			<div class="relative inline-block text-left" x-data="{ open: false }"> 
			  <div>
			    <button type="button" class="bg-white shadow h-12 px-4 rounded-lg text-gray-500 mr-4" id="options-menu" aria-haspopup="true" aria-expanded="true" x-on:click="open = !open" >
			    	<i class="fas fa-glasses text-sm mr-2"></i>
			      	Niveles
			      	<i class="fas fa-angle-down text-sm ml-2"></i>
			    </button>
			  </div>
			  <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" x-show="open" x-on:click.away="open = false">
			    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
			      @foreach ($levels as $level)
			      	<a class=" cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-blue-100 hover:text-gray-900" 
			      		role="menuitem"
			      		wire:click="$set('level_id', {{ $level->id }})"
			      		x-on:click="open = false"
			      		>
			      		{{$level->name}}
			      	</a>
			      @endforeach
			    </div>
			  </div>
			</div>

		</div>
	</div>
	
   <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl ">Últimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir aprendiendo a programar</p>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-2">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                @foreach ($courses as $course)
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                        <x-course-card :course="$course" />
                    </div>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>    
    </section>
</div>
