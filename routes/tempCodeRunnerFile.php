<?php
Route::get('/', function () {
    $name ='Rozan';
    return view('about', ['name'=>$name]);
});