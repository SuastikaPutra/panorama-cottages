<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [MainController::class, 'index'])->name('tour.index');
