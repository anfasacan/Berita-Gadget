@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Menambah Data Home')
@section('title','add data')

@section('method')
    <form method="POST" class="contact100-form validate-form" action="/admin/A_home" enctype="multipart/form-data">
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
<div class="wrap-input100 validate-input" data-validate="Judul is required">
    <span class="label-input100">Judul</span>
     <input class="input100"  type="int" name="judul" placeholder="Judul Berita" autocomplete="off" required>
    <span class="focus-input100"></span>

</div> 
@endsection

@section('data3')
    <div class="wrap-input100 validate-input" data-validate = "Ringkasan is required">
	<span class="label-input100">Ringkasan</span>
	<textarea class="input100" name="ringkasan" autocomplete="off" placeholder="Masukan Ringkasan Berita ..." required></textarea>
	<span class="focus-input100"></span>
     </div>
@endsection

@section('data4')

    <div class="wrap-input100 validate-input" data-validate="tanggal is required">
    <span class="label-input100">Tanggal</span>
        <input type="date" value="" class="input100" id="today" name="tanggal" required>
    <span class="focus-input100"></span>
</div> 
<script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
</script>
@endsection

@section('data5')

{{-- <form>
    <div class="custom-file">
        <label class="custom-file-label" for="customFile">Pilih File</label>
        <input type="file" name="gambar" class="form-control">
    </div>
  </form> --}}
  
  {{-- <script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  </script> --}}

    <div class="wrap-input100 validate-input" data-validate="Gambar is required">
    <span class="label-input100">Gambar</span>
     <input class="form-control" type="file" name="gambar" placeholder="Nama file gambar + extensi" autocomplete="off" required>
    <span class="focus-input100"></span>
</div> 
@endsection

{{-- @section('data6') 

<div class="wrap-input100 input100-select">
    <span class="label-input100">Kategori</span>
    <div>
        <select  name="kategori" class="selection-2" >
            <option></option>
            <option value="1" $x="1" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Smartphone</option>
            <option>Laptop</option>
        </select>
    </div>
    <span class="focus-input100"></span>
</div> --}}

{{-- @if ($x = "1")
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
@endif --}}

{{-- @if ($_POST['kategori'] === '1') {
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    }
@elseif ( $_POST['kategori'] === '2' ) {

    }
    @endif --}}
{{-- @endsection --}}



{{-- 
@switch($_POST['kategori'])
    @case(1)
        <p>asdasd</p>
        @break
    @case(2)
        
        @break
    @default
        
@endswitch --}}


{{-- @if ($x == "1")
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
@endif --}}


@section('data6')        

    


<script type="text/javascript">
    var subcategory = {
        Smartphone: ["",@foreach ($trob_smart as $tb)
    "{{$tb -> trobosan}}",
@endforeach],
        Laptop: ["",@foreach ($trob_lap as $tl)
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
<option>Smartphone</option>
<option>Laptop</option>
</select>
<select name ="trobosan" id="categorySelect" size="1">
<option  value="" disabled selected>Trobosan</option>
<option></option>
</select>
@endsection

{{-- @section('data7')        
<div class="wrap-input100 input100-select">
    <span class="label-input100">Kategori Trobosan</span>
    <div>
        <select class="selection-2" name="trobosan">
            <option></option>
            <option>Smartphone</option>
            <option>Laptop</option>
        </select>
    </div>
    <span class="focus-input100"></span>
</div>
@endsection --}}

{{-- @section('data6')
<form method=post action=dd-submit.php>
    <select name=category id=category>
    <option value='' selected>Select</option>

    </select>
    <select name=sub-category id=sub-category>
    </select>
    <input type=submit value=Submit></form>
@endsection --}}

@section('button')
<button type="submit" class="contact100-form-btn">
    <span>
        Masukan data
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
    </span>
</button>
@endsection

@section('back')
<div><a href="{{url('/admin/A_home')}}"><i class="fa fa-backward"></i> Kembali</a></div>    
@endsection