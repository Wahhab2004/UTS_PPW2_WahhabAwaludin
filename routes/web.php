<?php

use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('pemain', PemainController::class);


// Route::get('/pemain', function(){
//     return view('index');
// });
