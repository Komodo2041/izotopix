<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "App\Http\Controllers\MainController@list");

Route::match(["get", "post"], "/fill/Elements", "App\Http\Controllers\ElementsController@addElement");
Route::get('/elements', "App\Http\Controllers\ElementsController@list");
