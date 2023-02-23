@extends('layouts.layout')
@section('content')

    <main>

        <div class="container-fluid mt-4">
            <!--prima row-->
            <div class="row">
                <div class="col-12 no-padding relative">
                    <img src="{{ Vite::asset('resources\images\jumbotron.jpg') }}" alt="jumbotron" class="jumbo">
                    <div class="blue-tag d-flex flex-row align-items-center">
                        <h5 class="white no-margin">CURRENT SERIES</h5>
                    </div>
                </div>
            </div>
            <!--seconda row-->
            <div class="col-12">
                <div class="row bg-main py-5">
                    <div class="col-12 d-flex flex-column align-items-center">
                        
                        <div class="card-container">

                            @foreach ($comics as $key => $item)
                                
                                <a href="{{ route('comic_details', $item['id']) }}" class="comic-card">
                                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                                    <span class="white mt-2">{{ $item['title'] }}</span>
                                </a>

                            @endforeach

                        </div>

                        <div class="blue-tag-small mt-5">
                            <span class="white">LOAD MORE</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection