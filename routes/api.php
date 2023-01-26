<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProductController;

Route::post('newemployed', [PeopleController::class, 'newemployed']);
Route::post('login', [PeopleController::class, 'login']);

Route::group(['middeleware' => ['auth:sanctum']], function () {
    Route::get('logout', [PeopleController::class, 'logout']);
    Route::post('addclient', [PeopleController::class, 'addcliente']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
