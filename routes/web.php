<?php

use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uts', [UTSController::class, "index"]);
Route::get('/uts/create', [UTSController::class, "create"]);
Route::post('/uts/create', [UTSController::class, "store"]);