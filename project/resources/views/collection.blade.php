<!DOCTYPE html>
<html lang="en">
    <head>
        @include('page.header')
     </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
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
                           <a class="nav-item nav-link last" href="#"><img src="{{ asset('frontend/images/search_icon.png') }}"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="{{ asset('frontend/images/shop_icon.png') }}"></a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
	<!-- new collection section start -->
 	 @yield('content-collection')
	<!-- new collection section end -->
	<!-- section footer start -->
    <div class="section_footer">
    	@include('page.footer')
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <!-- Javascript files-->
      <script src="frontend/frontend/js/jquery.min.js"></script>
      <script src="frontend/frontend/js/popper.min.js"></script>
      <script src="frontend/frontend/js/bootstrap.bundle.min.js"></script>
      <script src="frontend/frontend/js/jquery-3.0.0.min.js"></script>
      <script src="frontend/frontend/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="frontend/frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="frontend/frontend/js/custom.js"></script>
      <!-- javascript --> 
      <script src="frontend/frontend/js/owl.carousel.js"></script>
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
