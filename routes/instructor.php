<?php

use App\Http\Livewire\InstructorCourse;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'instructor/courses');
Route::get('courses', InstructorCourse::class)->name('courses.index');
