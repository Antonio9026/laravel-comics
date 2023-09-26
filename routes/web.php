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
    return view('home');
})->name("home");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/COMICS', function () {
    return view('COMICS');
})->name("COMICS");

Route::get('/MOVIES', function () {
    return view('MOVIES');
})->name("MOVIES");

Route::get('/TV', function () {
    return view('TV');
})->name("TV");

Route::get('/GAMES', function () {
    return view('GAMES');
})->name("GAMES");
Route::get('/COLLECTIB
LES', function () {
    return view('COLLECTIBLES');
})->name("COLLECTIBLES");

Route::get('/VIDEOS', function () {
    return view('VIDEOS');
})->name("VIDEOS");

Route::get('/FANS', function () {
    return view('FANS');
})->name("FANS");

Route::get('/NEWS', function () {
    return view('NEWS');
})->name("NEWS");

Route::get('/SHOP', function () {
    return view('SHOP');
})->name("SHOP");
