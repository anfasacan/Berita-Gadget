@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Menambah Data Isi Spesifikasi')
@section('title','add data ')

@section('method')
    <form method="POST" class="contact100-form validate-form" action="/admin/update/edit_isi_spek/{{$isi_spek->id}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
         <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off" value="{{$isi_spek -> id}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="Produk is required">
    <span class="label-input100">Produk</span>
     <input class="input100" type="string" name="produk" placeholder="merk/jenis produk" autocomplete="off" required value="{{$isi_spek -> produk}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
<div class="wrap-input100 input100-select">
					<span class="label-input100">Tahun Rilis</span>
					<div>
						<select class="selection-2" name="tahun_rilis" >
                            {{ $last= date('Y')-20 }}
                            {{ $now = date('Y') }}
                            <option>{{$isi_spek -> tahun_rilis}}</option>
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
     <input class="input100" type="string" name="body" placeholder="Ukuran Body" autocomplete="off" value="{{$isi_spek -> body}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data5')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Layar</span>
     <input class="input100" type="string" name="layar" placeholder="ukuran Layar" autocomplete="off" value="{{$isi_spek -> layar}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data6')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">OS yang digunakan</span>
					<div>
                        <script type="text/javascript">
                            var subcategory = {
                                Smartphone: [" ","Android","IOS","Windows Phone","Blackberry OS"],
                                Laptop: [" ", "Windows", "Mac OS","Linux","DOS"]
                            }
                            function makeSubmenu(value) {
                                if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
                                else {
                                    var citiesOptions = "";
                                    for (categoryId in subcategory[value]) {
                                        citiesOptions += "<option>" + subcategory[value][categoryId] + "</option>";
                                    }
                                    document.getElementById("categorySelect").innerHTML = citiesOptions;
                                }
                            }
                        
                            function displaySelected() {
                                var country = document.getElementById("category").value;
                                var city = document.getElementById("categorySelect").value;
                                alert(country + "\n" + city);
                            }
                        
                            function resetSelection() {
                                document.getElementById("category").selectedIndex = 0;
                                document.getElementById("categorySelect").selectedIndex = 0;
                            }
                        </script>
                        </head>
                        <body onload="resetSelection()">
                        <select name = "os" id="category" size="1" onchange="makeSubmenu(this.value)">
                        <option  value="" disabled selected>OS</option>
                        <option>{{$isi_spek -> os}}</option>
                        <option>Smartphone</option>
                        <option>Laptop</option>
                        </select>
                        <select name ="os" id="categorySelect" size="1">
                        <option  value="" disabled selected>OS</option>
                        <option></option>
                        </select>
                        
					</div>
					<span class="focus-input100"></span>
                </div>

    



@endsection

@section('data7')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Processor</span>
     <input class="input100" type="string" name="cpu" placeholder="Processor yang digunakan" autocomplete="off" value="{{$isi_spek -> cpu}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data8')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Ram</span>
     <input class="input100" type="string" name="ram" placeholder="Processor yang digunakan" autocomplete="off" value="{{$isi_spek -> ram}}">
    <span class="focus-input100"></span>
</div> 
@endsection

{{-- @section('data8')
<div class="wrap-input100 input100-select">
    <span class="label-input100">Ukuran Ram</span>
    <div>
        <select class="selection-2" name="ram">
            {{ $last= 1 }}
            {{ $now = 18 }}
                <option>{{$isi_spek -> ram}}</option>

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
@endsection --}}

@section('data9')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Storage</span>
     <input class="input100" type="string" name="penyimpanan" placeholder="Storage yang disediakan" autocomplete="off" value="{{$isi_spek -> penyimpanan}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data10')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Graphic card</span>
     <input class="input100" type="string" name="gpu" placeholder="GPU yang digunakan" autocomplete="off" value="{{$isi_spek -> gpu}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data11')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Kamera</span>
        <textarea class="input100" name="kamera" autocomplete="off" placeholder="Kamera yang digunakan">{{$isi_spek -> kamera}}</textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data12')
<div class="wrap-input100 validate-input">
    <span class="label-input100">Baterai</span>
     <input class="input100" type="string" name="batrai" placeholder="Besarnya Batrai yang digunakan" autocomplete="off" value="{{$isi_spek -> batrai}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data13')
<div class="wrap-input100 validate-input" data-validate="gambar is required">
    <span class="label-input100">Gambar Produk Lama</span>
     <input class="input100" type="text" name="gambar" placeholder="Nama file gambar + extensinya" autocomplete="off" value="{{$isi_spek -> gambar}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data14')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Pilih File jika ingin mengganti</span>
     <input class="form-control" type="file" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" >
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data15')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Fitur</span>
        <textarea class="input100" name="fitur" autocomplete="off" placeholder="Fitur-Fitur yang di tawarkan">{{$isi_spek -> fitur}}</textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data16')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Ringkasan</span>
        <textarea class="input100" name="ringkasan" autocomplete="off" placeholder="Ringkasan untuk produk ini">{{$isi_spek -> ringkasan}}</textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data17')
                <div class="wrap-input100 input100-select">
					<span class="label-input100">Kategori</span>
					<div>
						<select class="selection-2" name="kategori">
                            <option>{{$isi_spek -> kategori}}</option>
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
        Update data
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    </span>
</button>
@endsection

@section('back')
<div><a href="{{url('/admin/A_isi_spek')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection