<!DOCTYPE html>
<html lang="en">
   <head>
	@include('page.header')
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
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
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="../frontend/images/running-shoes.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="../frontend/images/running-shoes.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="../frontend/images/running-shoes.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">Men Shoes</p>
						<div class="page_no">0/2</div>
						<p class="mens_taital_2">Men Shoes</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
							<p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="../frontend/images/running-shoes.png"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	<!-- header section end -->
	{{-- main content --}}
	<!-- new collection section start -->
    @yield('content')
   	<!-- contact section end -->
	{{--end main content --}}
	<!-- section footer start -->
    <div class="section_footer">
    	@include('page.footer')
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="../frontend/js/jquery.min.js"></script>
      <script src="../frontend/js/popper.min.js"></script>
      <script src="../frontend/js/bootstrap.bundle.min.js"></script>
      <script src="../frontend/js/jquery-3.0.0.min.js"></script>
      <script src="../frontend/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../frontend/js/custom.js"></script>
      <!-- javascript --> 
      <script src="../frontend/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>