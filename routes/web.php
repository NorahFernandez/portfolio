<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    $projects = DB::table('projects')
        ->get();

    return view('projects')->with('projects', $projects);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login/login');
});

Route::get('/register', function () {
    return view('login/register');
});
