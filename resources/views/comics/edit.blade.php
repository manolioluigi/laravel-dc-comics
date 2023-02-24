@extends('layouts.layout')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Modifica fumetto</h1>
                </div>
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="no-margin">
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title') ?? $comic->title }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Tipo</label>
                        <select name="type" class="form-control">
                            <option value="comic_book" @selected(old('type', $comic->type) == 'comic book')>Comic Book</option>
                            <option value="graphic_novel" @selected(old('type', $comic->type) == 'graphic novel')>Graphic Novel</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Descrizione</label>
                        <textarea name="description" class="form-control" placeholder="Inserisci una descrizione" rows="10">{{ old('description') ?? $comic->description }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Immagine</label>
                        <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'url dell'immagine" value="{{ old('thumb') ?? $comic->thumb }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ old('price') ?? $comic->price }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Serie</label>
                        <input type="text" name="series" class="form-control" placeholder="Inserisci la serie" value="{{ old('series') ?? $comic->series }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Data di pubblicazione</label>
                        <input type="date" name="sale_date" class="form-control" placeholder="Inserisci la data di pubblicazione" value="{{ old('sale_date') ?? $comic->sale_date }}">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection