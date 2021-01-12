@extends('Layout/index')

@section('title','Berita GADGET - Home')

@section('posisi')
		{{-- Mulai posisi --}}
		<li class="colorlib-active"><a href="{{ url('/')}}">Home</a></li>
		<li ><a href="{{ url('/video')}}">Video</a></li>
		<li ><a href="{{url ('/spek')}}">Spesifikasi</a></li>
		<li><a href="{{url ('/tentang')}}">Tentang</a></li>
		{{-- Selesai Posisi --}}
@endsection



@section('search')
	<form action="/cari/home" class="search-form" method="GET">
		<div class="form-group">
		  <span class="icon icon-search"></span>
		<input type="text" name="cari" class="form-control" autocomplete="off" placeholder="Cari Berita...">
		</div>
	  </form>
@endsection


@section('daftar')

	@foreach ($home as $hm)
	<div class="col-md-12">
		<div class="blog-entry ftco-animate d-md-flex">
		<a href="/berita/{{$hm->id}}" class="img img-2" style="background-image: url({{URL::to('/')}}/uploads/home/{{$hm -> gambar}});"></a>
			<div class="text text-2 pl-md-4">
			<h3 class="mb-2"><a href="/berita/{{$hm->id}}">{{$hm -> judul}}</a></h3>
  <div class="meta-wrap">
					<p class="meta">
						<span><i class="icon-calendar mr-2"></i>{{$hm -> tanggal}}</span>
						<a href="{{url ('/kategori')}}/{{$hm -> kategori}}"><i class="icon-folder-o mr-2"></i>{{$hm -> kategori}}</a>
					{{-- <span><a href="single.html"><i class="icon-folder-o mr-2"></i>{{$hm -> kategori}}</a></span> --}}
	  </p>
  </div>
<p class="mb-4">{{$hm -> ringkasan}}</p>
<p><a href="/berita/{{$hm->id}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
</div>
		</div>
	</div>

	@endforeach

<style>
	.pagination {
  display: center;
  justify-content: center;
}

.pagination li {
  display: block;
 }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="pagination">
                <span> <h3>{{ $home->links() }}</h3> </span>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('katego')
<li><a href="{{url ('/kategori/smartphone')}}">Smartphone</a></li>
<li><a href="{{url ('/kategori/laptop')}}">Laptop</a></li>
@endsection

@section('trob_smart')
	@foreach ($trob_smartphone -> reverse() as $ts )

	<tr>
		{{-- <li><td><a href="/trobosan/smartphone/{{$ts -> id}}" data-toggle="tooltip" data-placement="left" title="{{$ts -> penjelasan}}"> {{$ts -> trobosan}}</td> --}}
			<li><td><a href="/trobosan/smartphone/{{$ts -> id}}">{{$ts -> trobosan}}</td>
			<td><span>{{$ts -> tahun}}</span></td></li>
	</tr>

	{{-- <li><a href="/trobosan/smartphone/{{$ts -> id}}"> {{$ts -> trobosan}}<span>{{$ts -> tahun}}</span></a></li> --}}
	@endforeach
@endsection

@section('trob_lap')
	@foreach ($trob_laptop -> reverse() as $tl )
	{{-- <li><a href="/trobosan/laptop/{{$tl -> id}}" data-toggle="tooltip" data-placement="left" title="{{$tl -> penjelasan}}"> {{$tl -> trobosan}}<span>{{$tl -> tahun}}</span></a></li> --}}
	<li><td><a href="/trobosan/laptop/{{$tl -> id}}">{{$tl -> trobosan}}</td>
	<td><span>{{$tl -> tahun}}</span></td></li>


	@endforeach

@endsection

@section('penjelasan_laptop')

<h4>{{$penjelasan_lap -> trobosan ?? ""}}
	<?php 
	$penjel = $penjelasan_lap -> trobosan ?? "";
if ($penjel == "") {
  echo "";
} else {
  echo "<font color ='#cecece'>(Mulai Tahun ".$penjelasan_lap -> tahun.")"."</font>";
}
;?>
</h4>
<a>{{$penjelasan_lap -> penjelasan ?? ""}}</a>
<p style="color:#FFffff";>.</p>

@endsection

@section('penjelasan_smartphone')

<h4>{{$penjelasan_smart -> trobosan ?? ""}} 
<?php 
	$penjel = $penjelasan_smart -> trobosan ?? "";

if ($penjel == "") {
  echo "";
} else {
  echo "<font color ='#cecece'>(Mulai Tahun ".$penjelasan_smart -> tahun.")"."</font>";
}
;?>
</h4>
<a margin-bottom = "20px">{{$penjelasan_smart -> penjelasan ?? ""}}</a>
<p style="color:#FFffff";>.</p>
@endsection
