@extends('Layout/admin_master')

@section('title','Admin - Home')

@section('posisi')
<li><a href="{{url ('/admin/A_dashboard')}}"class=""><i class="lnr lnr-smile"></i> <span>Dashboard</span></a></li>
<li><a href="{{url ('/admin/A_home')}}" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
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
            
            <h3 class="panel-title">Tabel home</h3>
             
        </div>
        
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        {{-- <a href="/admin/A_home/create_home" class="btn btn-primary">Tambah Data</a> --}}
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah Data
                          </button>
                          
                        
                        @if (session('status'))
                            <div class="alert alert-success mt-3">
                               {{session('status')}}
                            </div>
                        @endif

                        @if (session('pesan'))
                            <div class="alert alert-danger mt-3">
                               {{session('pesan')}}
                            </div>
                        @endif
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Ringkasan</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Gambar-Prev</th>
                        <th>Trobosan</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($home-> reverse() as $hm)
                    <tr>
                        <td>{{$hm -> id}}</td>
                        <td>{{$hm -> judul}}</td>
                        <td>{{$hm -> kategori}}</td>
                        <td>{{$hm -> ringkasan}}</td>
                        <td>{{$hm -> tanggal}}</td>
                        <td>{{$hm -> gambar}}</td>
                    <td><img src="{{url('/uploads/home')}}/{{$hm -> gambar}}" height="50" width="50" alt=""></td>
                    <td>{{$hm -> trobosan}}</td>
                        <td><a href="/admin/{{$hm-> id}}/update/edit_home" class="btn btn-primary">Edit</a></td>
                      
                        <td><form action="A_home/{{$hm -> id}}" method="POST">
                            @method('delete')
                            @csrf
                        <button type="submit" onclick="return confirm('anda yakin ingin menghapus data degan id = {{$hm->id}}')" class="btn btn-danger" >Delete</button></form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END BORDERED TABLE -->
@endsection

@section('ttpdata')
<a href="/admin/A_home/create_home" class="btn btn-warning">Tetap Tambah Data</a>   
@endsection

@section('search')
<form class="navbar-form navbar-left" method="GET" action="/cari/A_home">
    <div class="input-group">
        <input type="text" name="cari" value="" class="form-control" placeholder="Search dashboard home...">
        <span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
    </div>
</form>




<!-- Button trigger modal -->

  
  
@endsection