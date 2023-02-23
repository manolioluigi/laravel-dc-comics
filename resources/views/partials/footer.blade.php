<footer>

   <div class="container-fluid">

    <!--prima row-->
    <div class="row bg-blue">
        <div class="col-12 d-flex justify-content-center my-5">
            @foreach ($footer_menu as $item)
                <a class="d-flex flex-row white mx-3 align-items-center" href="{{ $item['url'] }}">
                    <img src="{{Vite::asset($item['image'])}}" class="img-50 img-maxw-50 mx-2" alt="">
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </div>

    <!--seconda row-->
    <div class="row footer-bg">
        <div class="col-6 gray font-12 d-flex p-5">
            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <h5 class="white">DC COMICS</h5>
                    <span>Characters</span>
                    <span>Comics</span>
                    <span>Movies</span>
                    <span>TV</span>
                    <span>Games</span>
                    <span>Videos</span>
                    <span>News</span>
                </div>
                <div class="d-flex flex-column my-2">
                    <h5 class="white">SHOP</h5>
                    <span>Shop DC</span>
                    <span>Shop DC Collectibles</span>
                </div>
            </div>
            <div class="d-flex flex-column mx-5">
                <h5 class="white">DC</h5>
                <span>Terms of Use</span>
                <span>Privacy policy (new)</span>
                <span>Ad Choices</span>
                <span>Advertising</span>
                <span>Jobs</span>
                <span>Subscriptions</span>
                <span>Talent Workshops</span>
                <span>CPSC Certificates</span>
                <span>Ratings</span>
                <span>Shop Help</span>
                <span>Contact Us</span>
            </div>
            <div class="d-flex flex-column">
                <h5 class="white">SITES</h5>
                <span>DC</span>
                <span>MAD Magazine</span>
                <span>DC Kids</span>
                <span>DC Universe</span>
                <span>DC Power Visa</span>
            </div>
        </div>
        <div class="col-6 dc-footer-logo">

        </div>
    </div>
    
    <!--terza row-->
    <div class="row bg-darkgray">
        <div class="col-6 px-5 py-3">
            <div class="transparent-button">SIGN-UP NOW!</div>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end px-5">
            <h5 class="blue mx-3 pt-2">FOLLOW US</h5>
            <div class="d-flex">
                <img src="{{ Vite::asset('resources\images\footer-facebook.png') }}" alt="facebook">
                <img src="{{ Vite::asset('resources\images\footer-twitter.png') }}" class="mx-1" alt="twitter">
                <img src="{{ Vite::asset('resources\images\footer-youtube.png') }}" alt="youtube">
                <img src="{{ Vite::asset('resources\images\footer-pinterest.png') }}" class="mx-1" alt="pinterest">
                <img src="{{ Vite::asset('resources\images\footer-periscope.png') }}" alt="periscope">
            </div>
        </div>
    </div>

   </div>

</footer>

