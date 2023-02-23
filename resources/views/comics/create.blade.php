@extends('layouts.layout')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Inserisci un nuovo fumetto</h1>
                </div>
            </div>
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Tipo</label>
                        <select name="type" class="form-control">
                            <option value="comic_book">Comic Book</option>
                            <option value="graphic_novel">Graphic Novel</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Descrizione</label>
                        <textarea name="description" class="form-control" placeholder="Inserisci una descrizione" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Immagine</label>
                        <input type="text" name="thumb" class="form-control" placeholder="Inserisci l'url dell'immagine">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" placeholder="Inserisci il prezzo">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Serie</label>
                        <input type="text" name="series" class="form-control" placeholder="Inserisci la serie">
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Data di pubblicazione</label>
                        <input type="date" name="sale_date" class="form-control" placeholder="Inserisci la data di pubblicazione">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection