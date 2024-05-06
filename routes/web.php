<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    $data = 
    [
        'Heisenberg',
        'Pippo',
        'Pluto',
        'Paperino',
    ];
    //dd($data);
    return view('aboutpage', compact("data"));
});

Route::get('/contacts', function () {
    $data =
    [
        "message" => "Ciah",
        "last_message" => "Remember me as a GianCarlo Magalli..",
    ];
    return view('contactpage', $data);
});
