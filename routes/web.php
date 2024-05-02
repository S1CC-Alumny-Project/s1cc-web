<?php

use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewsController::class, 'home']);
