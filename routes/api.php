<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\ConversorPdfController;
use App\Http\Controllers\BancosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Usar a sintaxe de array para os controladores
Route::post('hello-post', [HelloWorldController::class, 'hello']);
Route::get('/hello/{name}', [HelloWorldController::class, 'hello']);
Route::get('/bands', [BandController::class, 'getAll']);
Route::get('/mpdf', [ConversorPdfController::class, 'ConversorPdf']);
Route::get('/bancos', [BancosController::class, 'exibirDadosDaConta']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




