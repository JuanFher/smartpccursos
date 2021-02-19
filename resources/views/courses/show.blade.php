<x-app-layout>
	<section class="bg-gray-700 py-12">
		<div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
			<figure>
				<img src="{{ Storage::url($course->image->url) }}" class="h-60 w-full object-cover">
			</figure>
			<div class="text-white">
				<h1 class="text-4xl">{{ $course->title }}</h1>
				<h2 class="text-xl">{{ $course->subtitle }}</h2>
				<p class="mb-2"><i class="fas fa-chart-line mr-3"></i>Nivel: {{ $course->level->name }}</p>
				<p class="mb-2"><i class="fas fa-book mr-3"></i>Categoría: {{ $course->category->name }}</p>
				<p class="mb-2"><i class="fas fa-users mr-3"></i>Matriculados: {{ $course->student_count }}</p>
				<p><i class="far fa-star mr-3"></i>calificación: {{ $course->rating }}</p>
			</div>
		</div>
	</section>
	<div class="container">
		
	</div>
</x-app-layout>