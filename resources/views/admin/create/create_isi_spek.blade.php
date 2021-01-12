@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Menambah Data Isi Spesifikasi')
@section('title','add data ')

@section('method')
    <form method="POST" class="contact100-form validate-form" action="/admin/A_isi_spek" enctype="multipart/form-data">
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
         <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="Produk is required">
    <span class="label-input100">Produk</span>
     <input class="input100" type="string" name="produk" placeholder="merk/jenis produk" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
<div class="wrap-input100 input100-select">
					<span class="label-input100">Tahun Rilis</span>
					<div>
						<select class="selection-2" name="tahun_rilis">
                            {{ $last= date('Y')-20 }}
                            {{ $now = date('Y') }}
                            <option></option>
                            @for ($i = $now; $i >= $last; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
@endsection

@section('data4')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Body</span>
     <input class="input100" type="string" name="body" placeholder="Ukuran Body" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data5')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Layar</span>
     <input class="input100" type="string" name="layar" placeholder="ukuran Layar" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data6')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">OS yang digunakan</span>
					<div>
						<select class="selection-2" name="os">
                            <option></option>
                            <option>Android</option>
                            <option>IOS</option>
							<option>Windows Phone </option>
                            <option>Blackberry OS</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
@endsection

@section('data7')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Processor</span>
     <input class="input100" type="string" name="cpu" placeholder="Processor yang digunakan" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data8')
<div class="wrap-input100 input100-select">
    <span class="label-input100">Ukuran Ram</span>
    <div>
        <select class="selection-2" name="ram">
            {{ $last= 1 }}
            {{ $now = 18 }}
                <option></option>

            @for ($i = $now; $i >= $last; $i--)
                <option value="{{ $i }}">{{ $i }} GB</option>
            @endfor
            <option>512 MB</option>
            <option>256 MB</option>
            <option>128 MB</option>
        </select>
    </div>
    <span class="focus-input100"></span>
</div>
@endsection

@section('data9')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Storage</span>
     <input class="input100" type="string" name="penyimpanan" placeholder="Storage yang disediakan" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data10')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Graphic card</span>
     <input class="input100" type="string" name="gpu" placeholder="GPU yang digunakan" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data11')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Kamera</span>
        <textarea class="input100" name="kamera" autocomplete="off" placeholder="Kamera yang digunakan"></textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data12')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Baterai</span>
     <input class="input100" type="string" name="batrai" placeholder="Besarnya Batrai yang digunakan" autocomplete="off">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data13')
{{-- <div class="wrap-input100 validate-input" data-validate="gambar1 is required">
    <span class="label-input100">Gambar Produk</span>
     <input class="input100" type="text" name="gambar" placeholder="Nama file gambar + extensinya" autocomplete="off" >
    <span class="focus-input100"></span>
</div>  --}}
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Gambar</span>
     <input class="form-control" type="file" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data14')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Fitur</span>
        <textarea class="input100" name="fitur" autocomplete="off" placeholder="Fitur-Fitur yang di tawarkan"></textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data15')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Ringkasan</span>
        <textarea class="input100" name="ringkasan" autocomplete="off" placeholder="Ringkasan untuk produk ini"></textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data16')        
<div class="wrap-input100 input100-select">
    <span class="label-input100">Kategori</span>
    <div>
        <select class="selection-2" name="kategori">
            <option></option>
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
<div><a href="{{url('/admin/A_isi_spek')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection