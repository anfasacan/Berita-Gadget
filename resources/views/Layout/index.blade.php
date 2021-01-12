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
	<link rel="stylesheet" href="{{asset('css/search.css')}}">

	<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">

  </head>
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
				{{-- <h1 id="colorlib-logo" class="mb-5"><a href="{{ url('/')}}" style="background-image: url(images/bg_1.jpg);">BERITA<span><font size = "12">&nbsp;SMART<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHONE</span></font></a></h1> --}}
				<h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">&nbsp;BERITA<span>GADGET</a></h1>
				{{-- <h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">BERITA<span><font size = "12">&nbsp;SMART<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHONE</span></font></a></h1> --}}
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-xl-8 py-5 px-md-5">
	    				<div class="row pt-md-4">
							@yield('penjelasan_laptop')
							@yield('penjelasan_smartphone')
							<br>
			    			@yield('daftar')
					
						</div><!-- END-->
						<div class="row">
							<div class="col">
							  <div class="block-27">
								
							  </div>
							</div>
						  </div>
						  </div>
						  <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
					  <div class="sidebar-box pt-md-4">
						
					  </div>
					  <div class="sidebar-box ftco-animate">
						<h3 class="sidebar-heading">Kategori</h3>
					  <ul class="categories">
						@yield('katego')
					  </ul>
					</div>
					  <div class="sidebar-box ftco-animate">

						
							<!-- Collapse Panel 1--><a data-toggle="collapse" href="#collapseSmartphoneT" role="button" aria-expanded="true" aria-controls="collapseSmartphoneT" >
							  <p ><strong class=""><h5 class="sidebar-heading">Terobosan - Smartphone  <i class="fa fa-angle-down"></i></h5></strong>
							</a>
							<div id="collapseSmartphoneT" class="collapse shadow-sm show">
							 
								  <ul class="categories">
									@yield('trob_smart')
								  </ul>

								  
								</div>
						
							<!-- Collapse Panel 1--><a data-toggle="collapse" href="#collapseLaptopT" role="button" aria-expanded="true" aria-controls="collapseSmartphoneT" >
								<p ><strong class=""><h5 class="sidebar-heading">Terobosan - Laptop  <i class="fa fa-angle-down"></i></h5></strong>
								</a>
								<div id="collapseLaptopT" class="collapse shadow-sm show">
								 
									<ul class="categories">
										@yield('trob_lap')
									  </ul>
	
									  
									</div>
								</div>
							
							
						  {{-- <h3 class="sidebar-heading">Terobosan - Smartphone</h3> --}}
						{{-- <ul class="categories">
						  <li><a href="#">Fashion <span>(6)</span></a></li>
						  <li><a href="#">Technology <span>(8)</span></a></li>
						  <li><a href="#">Travel <span>(2)</span></a></li>
						  <li><a href="#">Food <span>(2)</span></a></li>
						  <li><a href="#">Photography <span>(7)</span></a></li>
						</ul> --}}
					  </div>
	  
			    		<div class="row">
			          <div class="col">
			            <div class="block-27">
			           
			            </div>
			          </div>
			        </div>
					</div>
					
					{{-- Side Bar --}}
				
					
	    			
	            @yield('kategori')
				
				{{-- Berita Populer --}}
	         

	           

							

	            <div class="sidebar-box ftco-animate">
	            	
	            </div>


	          
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

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