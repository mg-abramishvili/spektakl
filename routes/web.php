<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShowController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;

Route::redirect('/', '/front-shows');

// Shows
Route::resource('/shows', ShowController::class);
Route::get('shows/delete/{id}','App\Http\Controllers\ShowController@delete');
Route::post('shows/file/{method}','App\Http\Controllers\ShowController@file');

// Schedules
Route::resource('/schedules', ScheduleController::class);
Route::get('schedules/delete/{id}','App\Http\Controllers\ScheduleController@delete');
Route::resource('/front-schedules', ScheduleController::class);

// Tickets
Route::resource('/tickets', TicketController::class);
Route::get('tickets/delete/{id}','App\Http\Controllers\TicketController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
