<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $comics = Comic::all();
        $header_menu = config('menus.header_menu');
        $footer_menu = config('menus.footer_menu');

        return view('comics.index', compact('comics', 'header_menu', 'footer_menu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header_menu = config('menus.header_menu');
        $footer_menu = config('menus.footer_menu');

        return view('comics.create', compact('header_menu', 'footer_menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:30'
        ]);

        $form_data = $request->all();

        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];

        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $comic = Comic::find($id);
        if($comic){
            $header_menu = config('menus.header_menu');
            $footer_menu = config('menus.footer_menu');
            return view('comics.edit', compact('comic', 'header_menu', 'footer_menu'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $comic = Comic::findOrFail($id);

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => 'required|max:30'
        ]);

        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
