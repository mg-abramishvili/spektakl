<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowController;
use App\Http\Controllers\ScheduleController;

Route::redirect('/', '/shows');

Route::resource('/shows', ShowController::class);
Route::resource('/schedules', ScheduleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
