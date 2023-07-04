<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//rotta per la HOME
Route::get('/', function () {
    $links = config('store.navbarLinks');
    return view('welcome', compact('links'));
});

//rotta per la INFO
Route::get('/infopage', function () {
    //Prendo i link dallo store
    $links = config('store.navbarLinks');
    //li passo alla view INFO
    return view('info', compact('links'));
});