
<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('ref')
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('admin/create/images/icons/favicon.ico"/')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/create/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			@yield('method')
				<span class="contact100-form-title">
					@yield('judul_tambah_data')
				</span>
                {{-- untuk text 1 baris --}}
				{{-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" autocomplete="off" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> --}}


                {{-- untuk option --}}
				{{-- <div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div> --}}

                {{-- untuk menambah pesan panjang --}}
				{{-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" autocomplete="off" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
                </div> --}}
                
                @yield('data1')
                @yield('data2')
                @yield('data3')
                @yield('data4')
                @yield('data5')
                @yield('data6')
                @yield('data7')
                @yield('data8')
                @yield('data9')
				@yield('data10')
				@yield('data11')
				@yield('data12')
				@yield('data13')
				@yield('data14')
				@yield('data15')
				@yield('data16')
				@yield('data17')
				@yield('data18')
				@yield('data19')
				@yield('data20')

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						@yield('button')
						
					</div>
					<div><p>&nbsp;</p></div>
					</div>
					@yield('back')
					</div>
				
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset ('admin/create/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset ('admin/create/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset ('admin/create/js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
