<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Berita GADGET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap')}}" rel="stylesheet">

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
					{{-- Mulai posisi --}}
    <li class="colorlib-active"><a href="{{ url('/')}}">Home</a></li>
    <li ><a href="{{ url('/video')}}">Video</a></li>
    <li ><a href="{{url ('/spek')}}">Spesifikasi</a></li>
    <li><a href="{{url ('/tentang')}}">Tentang</a></li>
    {{-- Selesai Posisi --}}
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="{{url ('/')}}" style="background-image: url({{ URL::to('/')}}/images/bg_1.jpg);">&nbsp;BERITA<span>GADGET</a></h1>
				
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-12 px-md-5 py-5">
            <p> <h1 class="mb-3" style="text-align: center">{{$berita -> judul}}</h1> </p>
	    				<div class="row pt-md-4">

                <div>
                {{-- bagian 1 --}}
                <div class="">
                  <h6 style="text-align: center"><i class="icon-calendar mr-2" > {{$berita -> tanggal}}</i></h6>
                  <center><a href="{{url ('/kategori')}}/{{$berita -> kategori}}"><i class="icon-folder-o mr-2"></i>{{$berita -> kategori}}</a></center>
                  <div class="">
                    <p style="text-align: center"><img src="{{ URL::to ('/')}}/uploads/isi_berita/{{$berita -> gambar1}}" alt="{{$berita -> gambar1}}"  width = "300" height="300"></p>
                  </div>
                  <p> {{$berita -> para1}}</p>
                </div>

                {{-- bagian 2 --}}
                <div class="">
                  <div class="">
                    <p style="text-align: center"><img src="{{ URL::to ('/')}}/uploads/isi_berita/{{$berita -> gambar2}}" alt="{{$berita -> gambar2}}"  width = "300" height="300" ></p>
                  </div>
                  <p> {{$berita -> para2}}</p>
                </div>

                {{-- bagian 3 --}}
                <div class="">
                  <div class="">
                    <p style="text-align: center"><img src="{{ URL::to ('/')}}/uploads/isi_berita/{{$berita -> gambar3}}" alt="{{$berita -> gambar3}}"  width = "300" height="300" ></p>
                  </div>
                  <p> {{$berita -> para3}}</p>
                </div>
                <div>
                <a href="/isi_spek/{{$berita -> id}}"> untuk Spesifikasi-nya dapat di lihat di sini</a>
                </div>
                <div>
                  
                <a href="/videonya/{{$berita -> id}}"> untuk Video-nya dapat di lihat di sini</a>
                </div>

              </div>
                
      

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