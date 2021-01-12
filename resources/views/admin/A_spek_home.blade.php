@extends('Layout/admin_master')

@section('title','Admin - Spesifikasi Home')

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class="active"><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
<li><a href="{{url ('/admin/A_video')}}" class=""><i class="lnr lnr-film-play"></i> <span>Video</span></a></li>
<li><a href="{{url ('/admin/A_isi_berita')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Berita</span></a></li>
<li><a href="{{url ('/admin/A_isi_spek')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Spesifikasi</span></a></li>
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
					{{-- <a href="/admin/A_spek_home/create_spek_home" class="btn btn-primary">Tambah Data</a> --}}
					<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
						Tambah Data
					  </a>
					@if (session('status'))
					<div class="alert alert-success">
					   {{session('status')}}
					</div>
					@endif
					<th>Id</th>
					<th>Produk</th>
					<th>kategori</th>
					<th>Gambar</th>
					<th>Gambar-Prev</th>
					<th>Ringkasan</th>
					<th>Link</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($spek_home-> reverse() as $sh)
				<tr>
					<td>{{$sh -> id}}</td>
					<td>{{$sh -> produk}}</td>
					<td>{{$sh -> kategori}}</td>
					<td>{{$sh -> gambar}}</td>
					<td><img src="{{url('/uploads/spek')}}/{{$sh -> gambar}}" height="50" width="50" alt=""></td>
					<td>{{$sh -> ringkasan}}</td>
					<td>{{$sh -> Link}}</td>
					<td><a href="/admin/{{$sh-> id}}/update/edit_spek_home" class="btn btn-primary">Edit</a></td>
                    <td><form action="A_spek_home/{{$sh -> id}}" method="POST">
						@method('delete')
						@csrf
					<button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$sh->id}}')" class="btn btn-danger" >Delete</button></form>
				</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- END BORDERED TABLE -->
	
@endsection

@section('ttpdata')
<a href="/admin/A_spek_home/create_spek_home" class="btn btn-warning">Tetap Tambah Data</a>   
@endsection



@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_spek_home">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard Spek Home...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection