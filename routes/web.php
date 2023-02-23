<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [ComicController::class, 'index'])->name('Comics');

/*
Route::get('/', function () {
    $comics = config('comics.comics_array');
    $header_menu = config('comics.header_menu');
    $footer_menu = config('comics.footer_menu');

    return view('home', compact('comics', 'header_menu', 'footer_menu'));
})->name('Comics');
*/
Route::get('/comic_details/{id}', function ($id) {
    $comics = config('comics.comics_array');
    $header_menu = config('comics.header_menu');
    $footer_menu = config('comics.footer_menu');
    $comic_book = '';

    foreach($comics as $item){
        if($item['id'] == intval($id)){
            $comic_book = $item;
        }
    };


    return view('comic', compact('comics', 'header_menu', 'footer_menu', 'comic_book'));
})->name('comic_details');
