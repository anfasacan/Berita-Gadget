<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <style>
    .pagination {
    display: center;
    justify-content: center;
  }
  
  .pagination li {
    display: block;
   }
  
  </style>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
               @yield('posisi')
        </ul>
        @yield('search')
			</nav>

			<div class="colorlib-footer">
				{{-- <h1 id="colorlib-logo" class="mb-5"><a href="{{ url('/')}}" style="background-image: url({{ URL::to('/')}}images/bg_1.jpg);">BERITA<span><font size = "12">&nbsp;SMART<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHONE</font></a></h1> --}}
          {{-- <h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">BERITA<span><font size = "12">&nbsp;SMART<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHONE</span></font></a></h1> --}}
          <h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">&nbsp;BERITA<span>GADGET</a></h1>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
    </aside> <!-- END COLORLIB-ASIDE -->
    @yield('JudulandGambar')
    @yield('table')
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-12 py-5 px-md-12">
	    				<div class="row pt-md-8">
                
                      @yield('isi')
                      
                                      </div>
                                    </>
                                 </div>

			    		</div><!-- END-->
			    	
					</div>
					
					{{-- Side Bar --}}
	    			

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>