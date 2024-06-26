<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Usar a sintaxe de array para os controladores
Route::post('hello-post', [HelloWorldController::class, 'hello']);
Route::get('/hello/{name}', [HelloWorldController::class, 'hello']);
Route::get('/bands', [BandController::class, 'getAll']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




