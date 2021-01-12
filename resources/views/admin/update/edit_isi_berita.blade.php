@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Mengedit Data Isi Berita')
@section('title','edit data ')

@section('method')
<form method="POST" class="contact100-form validate-form" action="/admin/update/edit_isi_berita/{{$isi_berita->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
    <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off" value="{{$isi_berita -> id}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection


@section('data2')
    <div class="wrap-input100 validate-input" data-validate="tanggal is required">
    <span class="label-input100">Tanggal</span>
        <input type="date" value="{{$isi_berita -> tanggal}}" class="input100" name="tanggal" required>
    <span class="focus-input100"></span>
</div> 
@endsection


@section('data3')
<div class="wrap-input100 validate-input" data-validate="judul is required">
    <span class="label-input100">judul</span>
     <input class="input100" value="{{$isi_berita -> judul}}" type="string" name="judul" placeholder="merk/jenis produk" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data4')
<div class="wrap-input100 validate-input" data-validate="gambar1 is required">
    <span class="label-input100">gambar ke-1 Lama</span>
     <input class="input100" type="text" value="{{$isi_berita -> gambar1}}" name="gambar1" placeholder="gambar ke-1" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data5')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Gambar ke-1 Pilih Jika ingin mengganti file</span>
     <input class="form-control" type="file" name="gambar1" placeholder="Nama file gambar + extensi" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data6')
    <div class="wrap-input100 validate-input" data-validate = "paragraf1 is required">
	<span class="label-input100">Paragraf ke-1</span>
	<textarea class="input100" name="para1" autocomplete="off" placeholder="Masukan paragraf pertama pada Berita ..." required>{{$isi_berita -> para1}}</textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data7')
<div class="wrap-input100 validate-input" data-validate="gambar2 is required">
    <span class="label-input100">gambar ke-2 Lama</span>
     <input class="input100" type="text"  name="gambar2" placeholder="gambar ke-2" autocomplete="off" value="{{$isi_berita -> gambar2}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data8')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Gambar ke-2 Pilih Jika ingin mengganti file</span>
     <input class="form-control" type="file" name="gambar2" placeholder="Nama file gambar + extensi" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data9')
    <div class="wrap-input100 validate-input" data-validate = "paragraf2 is required">
	<span class="label-input100">Paragraf ke-2</span>
	<textarea class="input100" name="para2" autocomplete="off" placeholder="Masukan paragraf kedua pada Berita ...">{{$isi_berita -> para2}}</textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data10')
<div class="wrap-input100 validate-input" data-validate="gambar3 is required">
    <span class="label-input100">gambar ke-3 Lama</span>
     <input class="input100" type="text" value="{{$isi_berita -> gambar3}}"name="gambar3" placeholder="gamabr ke-3" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data11')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Gambar ke-3 Pilih Jika ingin mengganti file</span>
     <input class="form-control" type="file" name="gambar3" placeholder="Nama file gambar + extensi" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data12')
    <div class="wrap-input100 validate-input" data-validate = "paragraf3 is required">
	<span class="label-input100">Paragraf ke-3</span>
	<textarea class="input100" name="para3" autocomplete="off" placeholder="Masukan paragraf ketiga pada Berita ...">{{$isi_berita -> para3}}</textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data13')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Kategori</span>
					<div>
						<select class="selection-2" name="kategori">
                            <option>{{$isi_berita -> kategori}}</option>
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
        Update Data
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    </span>
</button>
@endsection

@section('back')
<div><a href="{{url('/admin/A_isi_berita')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection