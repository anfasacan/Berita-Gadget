@extends('Layout/admin_master')

@section('title','Admin - Spesifikasi Home')

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class=""><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
<li><a href="{{url ('/admin/A_video')}}" class=""><i class="lnr lnr-film-play"></i> <span>Video</span></a></li>
<li><a href="{{url ('/admin/A_isi_berita')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Berita</span></a></li>
<li><a href="{{url ('/admin/A_isi_spek')}}" class=""><i class="lnr lnr-layers"></i> <span>Isi Spesifikasi</span></a></li>
<li><a href="{{url ('/admin/A_T_smartphone')}}" class="active"><i class="lnr lnr-layers"></i> <span>Terobosan Smartphone</span></a></li>
<li><a href="{{url ('/admin/A_T_laptop')}}" class=""><i class="lnr lnr-layers"></i> <span>Terobosan Laptop</span></a></li>


@endsection

@section('isi')

  <!-- BORDERED TABLE -->
  <div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">Tabel Trobosan Smartphone</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<a href="/admin/A_T_smartphone/create_T_smartphone" class="btn btn-primary">Tambah Data</a>
					{{-- <a type="button" class="btn btn-primary">
						Tambah Data
					  </a> --}}
					@if (session('status'))
					<div class="alert alert-success">
					   {{session('status')}}
					</div>
					@endif
					<th>Id</th>
					<th>Trobosan</th>
					<th>Penjelasan</th>
					<th>Tahun</th>
					
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($trob_smartphone-> reverse() as $ts)
				<tr>
					<td>{{$ts -> id}}</td>
					<td>{{$ts -> trobosan}}</td>
					<td>{{$ts -> penjelasan}}</td>
					<td>{{$ts -> tahun}}</td>
				
					<td><a href="{{$ts-> id}}/update/edit_T_smartphone" class="btn btn-primary">Edit</a></td>
                    <td><form action="A_T_smartphone/{{$ts -> id}}" method="POST">
						@method('delete')
						@csrf
					<button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$ts->id}}')" class="btn btn-danger" >Delete</button></form>
				</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- END BORDERED TABLE -->
	
@endsection


@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_T_smartphone">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard T Smartphone...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection