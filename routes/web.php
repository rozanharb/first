<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $name = 'Rozan';
    return view('about', ['name' => $name]);
    // return view ('about')-> ('name'=>$name);
    //return view(' about' ,compact('name'));
});
