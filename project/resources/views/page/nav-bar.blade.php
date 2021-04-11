<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"><a href="#"><img src="{{ asset('frontend/images/logo.png') }}"></a></div>
        </div>
        <div class="col-sm-9">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ URL::to('/home') }}">Home</a>
                    <a class="nav-item nav-link" href="{{ URL::to('/collection') }}">Collection</a>
                    <a class="nav-item nav-link" href="{{ URL::to('/shoes') }}">Shoes</a>
                    <a class="nav-item nav-link" href="{{ URL::to('/racingboots') }}">Racing Boots</a>
                    <a class="nav-item nav-link" href="{{ URL::to('/contact') }}">Contact</a>
                    <a class="nav-item nav-link last" href="#"><img src="../frontend/images/search_icon.png"></a>
                    <a class="nav-item nav-link last" href="contact.html"><img src="../frontend/images/shop_icon.png"></a>
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>