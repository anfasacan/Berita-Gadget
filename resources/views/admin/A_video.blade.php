@extends('Layout/admin_master')

@section('title','Admin - Video')

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class=""><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
<li><a href="{{url ('/admin/A_video')}}" class="active"><i class="lnr lnr-film-play"></i> <span>Video</span></a></li>
<li><a href="{{url ('/admin/A_isi_berita')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Berita</span></a></li>
<li><a href="{{url ('/admin/A_isi_spek')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Spesifikasi</span></a></li>
<li><a href="{{url ('/admin/A_T_smartphone')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Smartphone</span></a></li>
<li><a href="{{url ('/admin/A_T_laptop')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Laptop</span></a></li>

@endsection

@section('isi')

  <!-- BORDERED TABLE -->
  <div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Tabel Video</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					{{-- <a href="/admin/A_video/create_video" class="btn btn-primary">Tambah Data</a> --}}
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Tambah Data
					  </button>
					@if (session('status'))
					<div class="alert alert-success">
					 {{session('status')}}
					</div>
					@endif
					<th>Id</th>
					<th>judul video</th>
					<th>Kategori</th>
					<th>Ringkasan video</th>
					<th>videonya</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($video-> reverse() as $vid)
				<tr>
					<td>{{$vid -> id}}</td>
					<td>{{$vid -> judul_video}}</td>
					<td>{{$vid -> kategori}}</td>
					<td>{{$vid -> ringkasan_video}}</td>
					<td>{{$vid -> videonya}}</td>
					<td><a href="/admin/{{$vid-> id}}/update/edit_video" class="btn btn-primary">Edit</a></td>
                    <td><form action="A_video/{{$vid -> id}}" method="POST">
						@method('delete')
						@csrf
					<button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$vid->id}}')" class="btn btn-danger" >Delete</button></form></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- END BORDERED TABLE -->
	
@endsection

@section('ttpdata')
<a href="/admin/A_video/create_video" class="btn btn-warning">Tetap Tambah Data</a>   
@endsection


@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_video">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard Video...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection