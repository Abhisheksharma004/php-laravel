<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id?}', function (string $id = null) {
    if($id){
        return "<h1>Post Id : " .$id. "</h1>";
    }else{
        return "<h1>NO ID Found</h1>";
    }
});

Route::get('user',[UserController::class, 'getUser']);
// Route::view('/home','home');

// Route::get('/new', function () {
//     return view('home');
// });