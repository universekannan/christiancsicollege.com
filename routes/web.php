<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\WebController::class, 'home'])->name('home');
Route::get('/about', [App\Http\Controllers\WebController::class, 'about'])->name('about');
Route::get('/correspondent_messag', [App\Http\Controllers\WebController::class, 'correspondent_messag'])->name('correspondent_messag');
Route::get('/correspondent_message', [App\Http\Controllers\WebController::class, 'correspondent_message'])->name('correspondent_message');
Route::get('/principal_message', [App\Http\Controllers\WebController::class, 'principal_message'])->name('principal_message');
Route::get('/bpt', [App\Http\Controllers\WebController::class, 'bpt'])->name('bpt');
Route::get('/anatomy', [App\Http\Controllers\WebController::class, 'anatomy'])->name('anatomy');
Route::get('/physiology', [App\Http\Controllers\WebController::class, 'physiology'])->name('homephysiology');
Route::get('/exercise_therapy', [App\Http\Controllers\WebController::class, 'exercise_therapy'])->name('exercise_therapy');
Route::get('/massage_and_manipulative_therapy', [App\Http\Controllers\WebController::class, 'massage_and_manipulative_therapy'])->name('massage_and_manipulative_therapy');
Route::get('/electrotherapy', [App\Http\Controllers\WebController::class, 'electrotherapy'])->name('electrotherapy');
Route::get('/cardiology_and_intensive_care_unit', [App\Http\Controllers\WebController::class, 'cardiology_and_intensive_care_unit'])->name('cardiology_and_intensive_care_unit');
Route::get('/orthopaedics', [App\Http\Controllers\WebController::class, 'orthopaedics'])->name('orthopaedics');
Route::get('/laser_therapy', [App\Http\Controllers\WebController::class, 'laser_therapy'])->name('laser_therapy');
Route::get('/neurology', [App\Http\Controllers\WebController::class, 'neurology'])->name('neurology');
Route::get('/rehabilitation', [App\Http\Controllers\WebController::class, 'rehabilitation'])->name('rehabilitation');
Route::get('/fitness_and_yoga', [App\Http\Controllers\WebController::class, 'fitness_and_yoga'])->name('fitness_and_yoga');
Route::get('/meditation_hall', [App\Http\Controllers\WebController::class, 'meditation_hall'])->name('meditation_hall');
Route::get('/library', [App\Http\Controllers\WebController::class, 'library'])->name('library');
Route::get('/facilities', [App\Http\Controllers\WebController::class, 'facilities'])->name('facilities');
Route::get('/brochures', [App\Http\Controllers\WebController::class, 'brochures'])->name('brochures');
Route::get('/gallery', [App\Http\Controllers\WebController::class, 'gallery'])->name('gallery');
Route::get('/contact', [App\Http\Controllers\WebController::class, 'contact'])->name('contact');