<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('page.home');
Route::get('/category/{id}', [CategoryController::class, 'index'])->name('page.category.index');
Route::get('/writers', [WriterController::class, 'show'])->name('page.writer.show');
Route::get('/writers/{id}', [WriterController::class, 'index'])->name('page.writer.index');
Route::get('/courses/{id}', [CourseController::class, 'index'])->name('page.course.index');
Route::get('/about', [AboutController::class, 'show'])->name('page.about.show');
