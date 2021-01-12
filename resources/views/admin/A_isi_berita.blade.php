@extends('Layout/admin_master')

@section('title','Admin - Isi Berita')

@section('posisi')

<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class=""><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
<li><a href="{{url ('/admin/A_video')}}" class=""><i class="lnr lnr-film-play"></i> <span>Video</span></a></li>
<li><a href="{{url ('/admin/A_isi_berita')}}" class="active"><i class="lnr lnr-layers"></i> <span>Isi Berita</span></a></li>
<li><a href="{{url ('/admin/A_isi_spek')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Spesifikasi</span></a></li>
<li><a href="{{url ('/admin/A_T_smartphone')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Smartphone</span></a></li>
<li><a href="{{url ('/admin/A_T_laptop')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Laptop</span></a></li>

@endsection

@section('isi')

  <!-- BORDERED TABLE -->
  <div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Tabel isi berita</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					{{-- <a href="/admin/A_isi_berita/create_isi_berita" class="btn btn-primary">Tambah Data</a> --}}
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Tambah Data
					  </button>

					@if (session('status'))
					<div class="alert alert-success">
					   {{session('status')}}
					</div>
					@endif
					<th>Id</th>
					<th>Tanggal</th>
					<th>Judul</th>
					<th>kategori</th>
					<th>Gambar1</th>
					<th>Gambar1-Prev</th>
                    <th>para1</th>
					<th>Gambar2</th>
					<th>Gambar2-Prev</th>
                    <th>para2</th>
					<th>Gambar3</th>
					<th>Gambar3-Prev</th>
					<th>para3</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($berita-> reverse() as $ber)
				<tr>
					<td>{{$ber -> id}}</td>
					<td>{{$ber -> tanggal}}</td>
					<td>{{$ber -> judul}}</td>
					<td>{{$ber -> kategori}}</td>
					<td>{{$ber -> gambar1}}</td>
					<td><img src="{{url('/uploads/isi_berita')}}/{{$ber -> gambar1}}" height="50" width="50" alt=""></td>
                    <td>{{$ber -> para1}}</td>
					<td>{{$ber -> gambar2}}</td>
					<td><img src="{{url('/uploads/isi_berita')}}/{{$ber -> gambar2}}" height="50" width="50" alt=""></td>
                    <td>{{$ber -> para2}}</td>
					<td>{{$ber -> gambar3}}</td>
					<td><img src="{{url('/uploads/isi_berita')}}/{{$ber -> gambar3}}" height="50" width="50" alt=""></td>
					<td>{{$ber -> para3}}</td>
					<td><a href="/admin/{{$ber-> id}}/update/edit_isi_berita" class="btn btn-primary">Edit</a></td>
                    <td><form action="A_isi_berita/{{$ber -> id}}" method="POST">
						@method('delete')
						@csrf
					<button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$ber->id}}')" class="btn btn-danger" >Delete</button></form></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- END BORDERED TABLE -->
	
@endsection

@section('ttpdata')
<a href="/admin/A_isi_berita/create_isi_berita" class="btn btn-warning">Tetap Tambah Data</a>   
@endsection

@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_isi_berita">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard Isi Berita...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection