@extends('Layout/temp')

{{-------------------------------------------------------------------------------------------}}
@section('title','Berita GADGET - spesifikasi')

{{-------------------------------------------------------------------------------------------}}
@section('posisi')
    {{-- Mulai posisi --}}
    <li ><a href="{{ url('/')}}">Home</a></li>
    <li ><a href="{{ url('/video')}}">Video</a></li>
    <li class="colorlib-active"><a href="{{url ('/spek')}}">Spesifikasi</a></li>
    <li><a href="{{url ('/tentang')}}">Tentang</a></li>
    {{-- Selesai Posisi --}}
@endsection

{{-------------------------------------------------------------------------------------------}}
{{-- @section('gambar')
{{-- Mulai gambar --}}
{{-- Selesai Gambar  --}}
{{-- @endsection --}} 

{{-------------------------------------------------------------------------------------------}}
@section('isi')
	@foreach ($spek_home as $sh)

	<div class="col-md-12">
		<div class="blog-entry ftco-animate d-md-flex">
		<a href="isi_spek/{{$sh -> id}}" class="img img-2" style="background-image: url({{URL::to('/')}}/uploads/spek/{{$sh -> gambar}});"></a>
			<div class="text text-2 pl-md-4">
			<h3 class="mb-2"><a href="isi_spek/{{$sh -> id}}">{{$sh -> produk}}</a></h3>
  <div class="meta-wrap">
					<p class="meta">
					<span><a>{{$sh -> ringkasan}}</a></span>
	  </p>
  </div>
<p><a href="/isi_spek/{{$sh -> id}}" class="btn-custom">Spesifikasi <span class="ion-ios-arrow-forward"></span></a></p>
</div>
		</div>
	</div>

	@endforeach
	{{-- <div class="row">
		<div class="col">
		  <div class="block-29" style="margin-left:100%;">
			<ul>
			
			  <span> <h3>{{ $spek_home->links() }}</h3></span>
			 
			</ul>
		  </div>
		</div>
	  </div> --}}

	  <div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="pagination">
					<span> <h3>{{ $spek_home->links() }}</h3> </span>
				</ul>
			</div>
		</div>
	</div>
	
@endsection

@section('search')
<div class="col-xl-12 sidebar ftco-animate bg-light pt-8">
	<p>Cari Spesifikasi :</p>
	<form class="from-inline" method="GET" action="/cari/spek_home">
		<input name="cari" class="from-control mr-sm-2" placeholder="search" autocomplete="off" type="text">
		<button class="btn btn-primary icon-search" type="submit"></button>
	</form>	
@endsection
