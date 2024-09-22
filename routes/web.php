<?php

use Illuminate\Support\Facades\Route;

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

// Route::view('/home','home');

// Route::get('/new', function () {
//     return view('home');
// });