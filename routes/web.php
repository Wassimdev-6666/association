<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/* Route::get('/', function () {
    return 'Hello World';
});*/
Route::get('/',[HomeController::class,"index"]);








