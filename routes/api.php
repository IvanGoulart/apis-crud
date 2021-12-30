<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/customer', [CustomerController::class, 'store']);

Route::post('/update/{id}', [CustomerController::class, 'update']);

Route::get('/customerlist', [CustomerController::class, 'index']);

Route::get('/customerdelete/{id}', [CustomerController::class, 'destroy']);
Route::get('/customerfind/{id}', [CustomerController::class, 'show']);
