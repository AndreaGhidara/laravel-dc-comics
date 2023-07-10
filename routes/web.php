<?php

use App\Http\Controllers\comicController;
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
// Route::get('/', function () {
//     $data = [
//         'linkNav' => config('store.linkNav'),
//         'comicsInfoShop' => config('store.comicsInfoShop'),
//         'footerDcComics' => config('store.footerDcComics'),
//         'footerShop' => config('store.footerShop'),
//         'footerDc' => config('store.footerDc'),
//         'footerSites' => config('store.footerSites'),
//         'comicx' => config('comics'),

//     ];
//     return view('partials.header', $data);
// });

Route::get('/', function () {
    $ftLinks = config('store.footerDcComics');
    return view('partials.footer', compact('ftLinks'));
});

Route::get('/', [ComicController::class, "index"])->name("home");

Route::resource("comics", ComicController::class);

// //rotta per la INFO
// Route::get('/infopage', function () {
//     //Prendo i link dallo store
//     $links = config('store.navbarLinks');
//     //li passo alla view INFO
//     return view('info', compact('links'));
// });