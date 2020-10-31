<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ShowController;

Route::apiResource('shows', ShowController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
