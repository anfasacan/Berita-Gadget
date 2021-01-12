@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Mengedit Data Konten')
@section('title','edit data')

@section('method')
<form method="POST" class="contact100-form validate-form" action="/admin/update/edit_daftar/{{$daftar->id}}">
    @method('patch')
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
    <input class="input100" type="number" name="id" placeholder="Nomer id" autocomplete="off" required value="{{$daftar -> id}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Konten</span>
    <input class="input100" type="text" name="konten" placeholder="Nama konten untuk id ini" autocomplete="off" required value="{{$daftar -> konten}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data3')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Kategori</span>
					<div>
						<select class="selection-2" name="kategori">
                            <option>{{$daftar -> kategori}}</option>
                            <option>Smartphone</option>
                            <option>Laptop</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
@endsection

    @section('button')
<button type="submit" class="contact100-form-btn">
    <span>
        Masukan data
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    </span>
</button>
@endsection

@section('back')
<div><a href="{{url('/admin/A_dashboard')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection