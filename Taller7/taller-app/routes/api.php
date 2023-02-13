<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

/*CRUD*/
Route::get('/persona/todas', [PersonController::class, 'showAll']);
Route::post('/persona/insertar', [PersonController::class, 'insert']);
Route::put('/persona/actualizar/{doc}', [PersonController::class, 'update'])->where('doc', '[0-9]+');
Route::delete('/persona/borrar/{doc}', [PersonController::class, 'delete'])->where('doc', '[0-9]+');

/*otros endpoints*/
Route::get('/persona/{doc}', [PersonController::class, 'show'])->where('doc', '[0-9]+');