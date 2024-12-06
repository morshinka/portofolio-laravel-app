<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home',[
        "title" => "Home Page"
    ]);
});

Route::get('/about', function () {
    return view('pages.about',[
        "title" => "About Me"
    ]);
});

Route::get('/project', function () {
    return view('pages.project', [
        "title" => "My Project"
    ]);
});
