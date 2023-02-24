@extends('layouts.layout')
@section('content')

    <div class="p-5 mb-4 text-center">
        <h1 class="display-5 fw-bold">DC Comics</h1>
        <p class="fs-4">Ecco i nostri fumetti!</p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Tutti i fumetti</h2>
                    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un nuovo fumetto</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Immagine</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Serie</th>
                    <th>Prezzo</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th class="text-center">Azioni</th>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic['id']}}</td>
                            <td><img src="{{$comic['thumb']}}" class="img-fluid" alt=""></td>
                            <td>{{$comic['title']}}</td>
                            <td>{{$comic['description']}}</td>
                            <td>{{$comic['series']}}</td>
                            <td>{{$comic['price']}}</td>
                            <td>{{$comic['sale_date']}}</td>
                            <td>{{$comic['type']}}</td>
                            <td class="d-flex">
                                <a href="{{route('comics.show', ['comic' => $comic['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio fumetto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('comics.edit', ['comic' => $comic['id']])}}" class="btn btn-warning btn-sm btn-square" title="Modifica fumetto">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('comics.destroy', ['comic' => $comic['id']])}}" class="d-inline-block" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-square btn-danger" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection