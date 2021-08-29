<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;




// Route::get('/', function () {
//     return view('resumepage');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('resume', [AboutController::class,'show']);
