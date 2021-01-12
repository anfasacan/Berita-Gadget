@extends('Layout/admin_master')

@section('title','Admin - Dashboard')

@section('ref')
<meta http-equiv="refresh" content="1" > 
@endsection

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class="active"><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
<li><a href="{{url ('/admin/A_spek_home')}}" class=""><i class="lnr lnr-list"></i> <span>Spesifikasi Home</span></a></li>
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
            
            <h3 class="panel-title">Tabel Konten</h3>
             
        </div>
        
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <a href="/admin/A_dashboard/create_daftar" class="btn btn-primary">Tambah Data</a>
                        @if (session('status'))
                            <div class="alert alert-success">
                               {{session('status')}}
                            </div>
                        @endif
                        <th>Id</th>
                        <th>Konten</th>
                        <th>Kategori</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar-> reverse() as $df)
                    <tr>
                        <td>{{$df -> id}}</td>
                        <td>{{$df -> konten}}</td>
                        <td>{{$df -> kategori}}</td>
                        <td><a href="/admin/{{$df-> id}}/update/edit_daftar" class="btn btn-primary">Edit</a></td>
                      
                        <td><form action="A_dashboard/{{$df -> id}}" method="POST">
                            @method('delete')
                            @csrf
                        <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$df->id}}')" class="btn btn-danger" >Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END BORDERED TABLE -->
@endsection

@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_dashboard">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard konten...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>
@endsection