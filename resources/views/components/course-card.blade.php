@props(['course'])

<article class="card">
    <a href="#">
        <img alt="Placeholder" class="block h-auto sm:h-auto md:h-40 lg:h-40 object-cover w-full" src="{{ Storage::url($course->image->url ) }}">
        
    </a>
    <div class="card-body">
        <h1 class="card-title ">
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
        <a href="{{ route('courses.show', $course ) }}" class="block text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full mt-4">Más información</a>
    </div>
    
</article>