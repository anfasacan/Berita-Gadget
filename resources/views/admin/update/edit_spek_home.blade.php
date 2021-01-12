@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Mengedit Data Spesifikasi home')
@section('title','edit data')


@section('method')
<form method="POST" class="contact100-form validate-form" action="/admin/update/edit_spek_home/{{$spek_home->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
         <input class="input100" type="int" value="{{$spek_home -> id}}" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="Produk is required">
    <span class="label-input100">Produk</span>
     <input class="input100" type="int" value="{{$spek_home -> produk}}" name="produk" placeholder="merk/jenis produk" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
    <div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">File Sebelumnya</span>
     <input class="input100" value="{{$spek_home -> gambar}}" type="text" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data4')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Pilih File jika ingin mengganti</span>
     <input class="form-control" type="file" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" >
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data5')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Ringkasan</span>
        <textarea class="input100" name="ringkasan" autocomplete="off" placeholder="Ringkasan untuk produk ini...">{{$spek_home -> ringkasan}}</textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data6')
    <div class="wrap-input100 validate-input" data-validate = "Link is required">
	<span class="label-input100">Link</span>
	<textarea class="input100" name="link" autocomplete="off" placeholder="Masukan Tautan yang bersangkutan ..." required>{{$spek_home -> Link}}</textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data7')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Kategori</span>
					<div>
						<select class="selection-2" name="kategori">
                            <option>{{$spek_home -> kategori}}</option>
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
<div><a href="{{url('/admin/A_spek_home')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection