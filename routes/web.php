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
    return view('welcome');
});

Route::get('/test', function() {
    return "Teszt";
});

Route::get('/gyumolcsok', function() {
    return ['alma', 'körte', 'banán', 'eper'];
});

Route::get('/tanulok', function() {
    $tanulok = [
        'Gipsz Jakab' => 4,
        'Szem Eszter' => 5,
        'Makk Márton' => 1
    ]; //asszociatív tömb (indexek tetszőleges sztringek)
    // return $tanulok;
    return view('tanulok', ['tanulok' => $tanulok]);
});

Route::get('/osztalyok', function() {
    $osztalyok = [
        '14F' => [
                    'Szem Eszter' => 5,
                    'Makk Márton' => 1
                 ],

        '13A' => [
                    'Tök Ödön' => 5,
                    'Kiss Mihály' => 1
                 ]
    ];
    return $osztalyok;
});