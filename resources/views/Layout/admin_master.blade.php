<!doctype html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')}}" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/')}}">

	<style>
		.panel {
  padding: 15px;
  margin-bottom: 20px;
  background-color: rgba(0, 0, 0, 0.0);
  border: 0px solid #dddddd;
  border-radius: 0px;
  -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);
}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
			<a href="{{url('/')}}"><img src="{{URL::to('/admin')}}/assets/img/BS-logo.png" width="80" alt="BS Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				@yield('search')
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							{{-- <a href="/logout" class="dropdown-toggle" data-toggle="dropdown"><img src="{{URL::to('/admin')}}/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
                            <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul> --}}

							<a href="/logout"><img src="{{URL::to('/admin')}}/assets/img/Logout.png" class="img-circle" alt="Avatar"> <span>Logout</span></a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					   @yield('posisi')
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
            <!-- MAIN CONTENT -->
			@yield('isi')
							  <!-- Modal Add data-->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLongTitle">Peringatan Menambah data secara langsung</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						Apakah anda yakin menambahkan data di from ini ? <br> anda dapat menambah data dengan
						klik dashboard dan tambahkan data di form dashboard agar urutan id tidak berantakan. <br>
						apakah anda tetap ingin menambahkan data pada form ini ?
						</div>
						<div class="modal-footer">
							@yield('ttpdata')
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						
						<a href="{{URL('/admin/A_dashboard')}}" class="btn btn-primary">Pergi ke form Dashboard</a>
						</div>
					</div>
					</div>
				</div>

			
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Candra Ganteng</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	  })</script>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
