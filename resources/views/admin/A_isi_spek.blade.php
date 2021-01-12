@extends('Layout/admin_master')

@section('title','Admin - Spesifikasi Home')

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class=""><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
<li><a href="{{url ('/admin/A_video')}}" class=""><i class="lnr lnr-film-play"></i> <span>Video</span></a></li>
<li><a href="{{url ('/admin/A_isi_berita')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Berita</span></a></li>
<li><a href="{{url ('/admin/A_isi_spek')}}" class="active"><i class="lnr lnr-layers"></i> <span>Isi Spesifikasi</span></a></li>
<li><a href="{{url ('/admin/A_T_smartphone')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Smartphone</span></a></li>
<li><a href="{{url ('/admin/A_T_laptop')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Laptop</span></a></li>
@endsection

@section('isi')

  <!-- BORDERED TABLE -->
  <div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Tabel Spesifikasi home</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					{{-- <a href="/admin/A_isi_spek/create_isi_spek" class="btn btn-primary">Tambah Data</a> --}}
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Tambah Data
					  </button>
					@if (session('status'))
					<div class="alert alert-success">
					   {{session('status')}}
					</div>
					@endif
					<th>Id</th>
					<th>Produk</th>
					<th>Kategori</th>
					<th>Tahun Rilis</th>
					<th>Body</th>
					<th>Layar</th>
                    <th>Opartion System</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>Storage</th>
                    <th>Graphic Card</th>
                    <th>Kamera</th>
                    <th>Baterai</th>
					<th>Gambar</th>
					<th>Gambar-Prev</th>
                    <th>Ringkasan</th>
                    <th>Fitur</th>
                    <th>Edit</th>
                    <th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($isi_spek-> reverse() as $is)
				<tr>
					<td>{{$is -> id}}</td>
					<td>{{$is -> produk}}</td>
					<td>{{$is -> kategori}}</td>
					<td>{{$is -> tahun_rilis}}</td>
                    <td>{{$is -> body}}</td>
                    <td>{{$is -> layar}}</td>
                    <td>{{$is -> os}}</td>
                    <td>{{$is -> cpu}}</td>
                    <td>{{$is -> ram}}</td>
                    <td>{{$is -> penyimpanan}}</td>
                    <td>{{$is -> gpu}}</td>
                    <td>{{$is -> kamera}}</td>
                    <td>{{$is -> batrai}}</td>
					<td>{{$is -> gambar}}</td>
					<td><img src="{{url('/uploads/spek')}}/{{$is -> gambar}}" height="50" width="50" alt=""></td>
                    <td>{{$is -> ringkasan}}</td>
                    <td>{{$is -> fitur}}</td>
					<td><a href="/admin/{{$is-> id}}/update/edit_isi_spek" class="btn btn-primary">Edit</a></td>
                    <td><form action="A_isi_spek/{{$is -> id}}" method="POST">
						@method('delete')
						@csrf
					<button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$is->id}}')" class="btn btn-danger" >Delete</button></form></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- END BORDERED TABLE -->
	
@endsection

@section('ttpdata')
<a href="/admin/A_isi_spek/create_isi_spek" class="btn btn-warning">Tetap Tambah Data</a>   
@endsection


@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_isi_spek">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard Isi Spek...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection