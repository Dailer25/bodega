<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::post('newemployed', [PeopleController::class, 'newemployed']);
Route::post('addclient', [PeopleController::class, 'addcliente']);

Route::group(['middeleware'=>['auth:sanctum']], function(){
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
