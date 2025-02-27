<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;

Route::prefix('V1')->group(function () {
    route::apiResource('/tasks',TaskController::class);
    route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
