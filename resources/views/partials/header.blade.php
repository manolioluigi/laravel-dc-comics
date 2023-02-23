<header>
    <div class="container-fluid">
        <div class="row bg-blue d-flex flex-row justify-content-end align-items-center pb-1">
            <div class="col-2">
                <span class="white font-12">DC POWER VISA</span>
            </div>
            <div class="col-2">
                <span class="white font-12">ADDITIONAL DC SITES</span>
            </div>
        </div>
    </div>
    <div class="container height-full">
        <div class="row height-full">
            <div class="col-2 height-full d-flex align-items-center">
                <img class="img-70" src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="logo">
            </div>
            <div class="col-8 height-full">
                <nav class="height-full d-flex align-items-center">
                    <ul class="d-flex flex-row pt-3">
                        @foreach ($header_menu as $item)
                            <li class="mx-2">
                                <a href="{{ $item['url'] }}" class="{{ Route::currentRouteName() == $item['label'] ? 'active' : ''}}">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-2 height-full d-flex align-items-center">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </div>

</header>