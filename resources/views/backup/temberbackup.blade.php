<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('larapel/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('canss/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('larapel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('larapel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('larapel/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('larapel/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('larapel/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('larapel/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('larapel/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('larapel/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('larapel/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('larapel/css/style.css')}}">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					@yield('posisi')
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url(images/bg_1.jpg);">BERITA <span>GADGET</span></a></h1>
				
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-12 px-md-5 py-5">
              <p> <h1 class="mb-3">@yield('judul')</h1> </p>
	    				<div class="row pt-md-4">
                            
                           
                                
                                <p>@yield('awalgambar')</p>
                                <p>@yield('para1')</p>
                                
                                <p>@yield('gambar2')</p>
                                <p>@yield('para2')</p>
                                
                                <p>@yield('gambar3')</p>
                                <p>@yield('para3')</p>

		                </div>
		            </div>


		           <!-- END-->
			    	</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  


  <script src="{{ asset('larapel/js/jquery.min.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('larapel/js/popper.min.js')}}"></script>
  <script src="{{ asset('larapel/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('larapel/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('larapel/js/aos.js')}}"></script>
  <script src="{{ asset('larapel/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('larapel/js/scrollax.min.js')}}"></script>
  <script src="{{ asset('larapel/js/main.js')}}"></script>
    
  </body>
</html>