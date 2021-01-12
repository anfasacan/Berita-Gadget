@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Mengedit Data Home')
@section('title','edit data')

@section('method')
<form method="POST" class="contact100-form validate-form" action="/admin/update/edit_home/{{$home->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
    <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off" value="{{$home -> id}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="Judul is required">
    <span class="label-input100">Judul</span>
     <input class="input100"  type="int" name="judul" placeholder="Judul Berita" autocomplete="off" required value="{{$home -> judul}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
    <div class="wrap-input100 validate-input" data-validate = "Ringkasan is required">
	<span class="label-input100">Ringkasan</span>
	<textarea class="input100" name="ringkasan" autocomplete="off" placeholder="Masukan Ringkasan Berita ..." required>{{$home -> ringkasan}}</textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data4')

    <div class="wrap-input100 validate-input" data-validate="tanggal is required">
    <span class="label-input100">Tanggal</span>
        <input type="date"  class="input100" name="tanggal" required value="{{$home -> tanggal}}">
    <span class="focus-input100"></span>
</div> 

@endsection

@section('data5')
    <div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">File Sebelumnya</span>
     <input class="input100" type="text" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" value="{{$home -> gambar}}">
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data6')
<div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Pilih File jika ingin mengganti</span>
     <input class="form-control" type="file" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" >
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data7')        

    


<script type="text/javascript">
    var subcategory = {
        Smartphone: ["{{$home -> trobosan}}","",@foreach ($trob_smart as $tb)
    "{{$tb -> trobosan}}",
@endforeach],
        Laptop: ["{{$home -> trobosan}}","",@foreach ($trob_lap as $tl)
    "{{$tl -> trobosan}}",
@endforeach]
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
<select name = "kategori" id="category" size="1" onchange="makeSubmenu(this.value)">
<option  value="" disabled selected>Kategori</option>
<option>{{$home -> kategori}}</option>
<option>Smartphone</option>
<option>Laptop</option>
</select>
<select name ="trobosan" id="categorySelect" size="1">
<option  value="" disabled selected>Trobosan</option>
<option></option>
</select>
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
<div><a href="{{url('/admin/A_home')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection