
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Berita GADGET - Tentang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
				  <li ><a href="{{ url('/')}}">Home</a></li>
          <li ><a href="{{ url('/video')}}">Video</a></li>
				  <li ><a href="{{url ('/spek')}}">Spesifikasi</a></li>
				  <li class="colorlib-active"><a href="{{url ('/tentang')}}">Tentang</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
        {{-- <h1 id="colorlib-logo" class="mb-5"><a href="{{ url('/')}}" style="background-image: url(images/bg_1.jpg);">BERITA<span><font size = "12">&nbsp;SMART<span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PHONE</span></font></a></h1> --}}
        <h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">&nbsp;BERITA<span>GADGET</a></h1>
        
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	    	<div class="container-fluid px-0">
	    		<div class="row d-flex">
	    			<div class="col-md-6 d-flex">
	    				<div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url(https://images.unsplash.com/photo-1468495244123-6c6c332eeece?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);">
	    				</div>
	    			</div>
	    			<div class="col-md-6 d-flex align-items-center">
	    				<div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
                <p align = "justify">Website ini dibuat untuk pengerjaan penulisan ilmiah yang dilakukan oleh kampus gunadarma</p>
		            <h2 class="mb-4">Temukan Kita di :</h2>
              <a href="{{url('https://www.instagram.com/anfasa_can/')}}" target="_blank"><p> <ion-icon name="logo-instagram"></ion-icon> Instagram </p></a>
              <a href="{{url('https://web.facebook.com/anfasacan')}}" target="_blank"><p> <ion-icon name="logo-facebook"></ion-icon> Facebook </p></a>
              <a href="{{url('https://twitter.com/anfasa_can')}}" target="_blank"><p> <ion-icon name="logo-twitter"></ion-icon> Twitter</p></a>
                <div class="text px-4 pt-5 pt-md-5 px-md-4 pr-md-5 ftco-animate">
                  <p>Layanan Telp.</p>
                  <p> <ion-icon name="call-outline"></ion-icon> (+62) 89699141516 </p>
                 
                  <a href="{{url ('/login')}}"><p>Login(admin)</p></a>
                </div>
              </div>
              </div>
            </div>
            
          </div>
          
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    
  </body>
</html>