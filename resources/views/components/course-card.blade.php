@props(['course'])

<article class="overflow-hidden rounded-xl shadow-lg">
    <a href="#">
        <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ Storage::url($course->image->url ) }}">
        
    </a>
    <div class="px-6 py-4">
        <h1 class="text-xl text-gray-700 mb-2 leading-6 ">
                {{ Str::limit($course->title, 40) }}
        </h1>
        <p class="text-gray-500 text-sm mb-2">Prof: {{ $course->teacher->name }} </p>
        <div class="flex">  
            <ul class="flex text-sm">
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i></li>
                <li class="mr-1"><i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i></li>
            </ul>
            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users sm:grid-cols-2 "></i>  
                ({{$course->students_count}})
            </p>
        </div>
        <a href="{{ route('courses.show', $course ) }}" class="block text-center w-full mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mt-4">Ver</a>
    </div>
    
</article>