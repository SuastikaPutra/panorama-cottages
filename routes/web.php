<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/services', [MainController::class, 'services'])->name('services');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/rooms', [MainController::class, 'rooms'])->name('rooms');
Route::get('/elements', [MainController::class, 'elements'])->name('elements');
Route::get('/maps', [MainController::class, 'maps'])->name('maps');
Route::get('/room-1', [MainController::class, 'room1'])->name('room-1');
Route::get('/room-2', [MainController::class, 'room2'])->name('room-2');
Route::get('/#rooms', function () {
    return view(view: 'index');
})->name('rooms');
