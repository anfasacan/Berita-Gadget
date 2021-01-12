		@extends('Layout/temp')
			

		@section('title','Berita GADGET - Video')
			
		@section('posisi')
			{{-- Mulai posisi --}}
			<li ><a href="{{ url('/')}}">Home</a></li>
			<li class="colorlib-active"><a href="{{ url('/video')}}">Video</a></li>
			<li ><a href="{{url ('/spek')}}">Spesifikasi</a></li>
			<li><a href="{{url ('/tentang')}}">Tentang</a></li>
			{{-- Selesai Posisi --}}
		@endsection


		@section('isi')
		
		@foreach ($video as $vid)
		
			{{-- Video 1 --}}
			<div class="col-md-12">
				<div class="blog-entry ftco-animate d-md-flex">
				<iframe width="400" height="300" src="{{$vid -> videonya}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

					<div class="text text-2 pl-md-4">
					<h3 class="mb-2"><a href="/berita/{{$vid->id}}">{{$vid -> judul_video}}</a></h3>
		 
					<p class="mb-4">{{$vid -> ringkasan_video}} <br><b>lihat berita selengkapnya dengan tekan tombol dibawah ini.</b>
		  </p>
		  <p><a href="/berita/{{$vid->id}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
		</div>
				</div>
			</div>
			{{-- END video 1 --}}
			@endforeach
			{{-- <div class="row">
				<div class="col">
				  <div class="block-29" style="margin-left:100%;">
					<ul>
					
					  <span> <h3>{{ $video->links() }}</h3></span>
					 
					</ul>
				  </div>
				</div>
			  </div> --}}

			  <div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
							<span> <h3>{{ $video->links() }}</h3> </span>
						</ul>
					</div>
				</div>
			</div>
		@endsection

@section('search')
<div class="col-xl-12 sidebar ftco-animate bg-light pt-8">
	<p>Cari Video :</p>
	<form class="from-inline" method="GET" action="/cari/video">
		<input name="cari" class="from-control mr-sm-2" placeholder="search" autocomplete="off" type="text">
		<button class="btn btn-primary icon-search" type="submit"></button>
	</form>	
@endsection