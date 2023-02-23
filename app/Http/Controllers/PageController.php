<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        $comics = Comic::all();
        $header_menu = config('menus.header_menu');
        $footer_menu = config('menus.footer_menu');
        return view('home', compact('comics', 'header_menu', 'footer_menu'));
    }

    public function show($id)
    {
        $comic_book = Comic::find($id);
        if($comic_book){
            $header_menu = config('menus.header_menu');
            $footer_menu = config('menus.footer_menu');
            return view('comics.show', compact('comic_book', 'header_menu', 'footer_menu'));
        }
        abort(404);
    }

}
