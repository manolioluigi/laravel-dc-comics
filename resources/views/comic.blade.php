@extends('layouts.layout')
@section('content')

    <main>

        <div class="container-fluid mt-4">
            <!--prima row-->
            <div class="row">
                <div class="col-12 no-padding relative">
                    <img src="{{ Vite::asset('resources\images\jumbotron.jpg') }}" alt="jumbotron" class="jumbo">
                    <div class="comic-thumb d-flex flex-row align-items-center">
                        <img src="{{$comic_book['thumb']}}" alt="{{$comic_book['title']}}">
                        <div class="half-blue-tag">COMIC BOOK</div>
                        <div class="small-blue-tag">VIEW GALLERY</div>
                    </div>
                    <div class="blue-bar"></div>
                </div>
            </div>
            <!--seconda row-->
            <div class="col-12">
                <div class="row bg-main">
                    <div class="col-12 d-flex flex-column align-items-center bg-white">
                        
                        <div class="row width-75">
                            <div class="col-8">

                                <h4 class="mt-5 darkblue">{{$comic_book['title']}}</h4>
                                <div class="green-bar d-flex justify-content-between my-3">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3">U.S. Price:</span>
                                        <span class="white">{{$comic_book['price']}}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3">AVAILABLE</span>
                                        <div class="vertical-line"></div>
                                        <span class="white mx-3">Check Availability</span>
                                    </div>
                                </div>
                                <p class="darkgray">{{$comic_book['description']}}</p>

                            </div>
                            <div class="col-4 d-flex flex-column align-items-end">
                                <span class="darkgray mt-5">ADVERTISEMENT</span>
                                <img src="{{Vite::asset('resources\images\adv.jpg')}}" alt="adv">
                            </div>
                        </div>

                        <div class="row width-75 my-5">
                            <div class="col-6">
                                <h5 class="darkblue">Talent</h5>
                                <div class="d-flex flex-column font-12">
                                    <div class="d-flex justify-content-between">
                                        <span class="darkgray">Art by</span>
                                        <p class="blue width-75">
                                            @foreach ($comic_book['artists'] as $artist)
                                                {{$artist}}
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="darkgray">Written by</span>
                                        <p class="blue width-75">
                                            @foreach ($comic_book['writers'] as $writer)
                                                {{$writer}}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 font-12">
                                <h5 class="darkblue">Specs</h5>
                                <div class="d-flex justify-content-between">
                                    <span class="darkgray">Series:</span>
                                    <p class="blue width-75">{{$comic_book['series']}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="darkgray">U.S. Price:</span>
                                    <p class="width-75">{{$comic_book['price']}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="darkgray">On Sale Date:</span>
                                    <p class="width-75">{{$comic_book['sale_date']}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection