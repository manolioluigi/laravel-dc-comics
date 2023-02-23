<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        $header_menu = config('comics.header_menu');
        $footer_menu = config('comics.footer_menu');
        return view('home', compact('comics', 'header_menu', 'footer_menu'));
    }

}