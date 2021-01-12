@extends('Layout/create_edit_temp')

@section('judul_tambah_data','Mengedit Data Home')
@section('title','edit data')

@section('method')
<form method="POST" class="contact100-form validate-form" action="/admin/update/edit_T_smartphone/{{$trob_smart->id}}" enctype="multipart/form-data">
    @method('patch')
    @csrf
@endsection

@section('data1')        
    <div class="wrap-input100 validate-input" data-validate="id is required">
	    <span class="label-input100">Id</span>
    <input class="input100" type="int" name="id" placeholder="Nomer id / kosongkan saja" autocomplete="off" value="{{$trob_smart -> id}}">
	    <span class="focus-input100"></span>
    </div>  
@endsection

@section('data2')
<div class="wrap-input100 validate-input" data-validate="Judul is required">
    <span class="label-input100">Trobosan</span>
     <textarea class="input100"  type="text" name="trobosan" placeholder="Judul Berita" autocomplete="off" required value="">{{$trob_smart -> trobosan}}</textarea>
    <span class="focus-input100"></span>
</div> 
@endsection

@section('data3')
    <div class="wrap-input100 validate-input">
        <span class="label-input100">Penjelasan</span>
    <textarea class="input100" name="penjelasan" autocomplete="off" placeholder="penjelasan untuk terobosan ini">{{$trob_smart -> penjelasan}}</textarea>
        <span class="focus-input100"></span>
    </div>
@endsection

@section('data4')
<div class="wrap-input100 input100-select">
    <span class="label-input100">Tahun</span>
    <div>
        <select class="selection-2" name="tahun">
            {{ $last= 2000 }}
            {{ $now = 2020 }}
                <option>{{$trob_smart -> tahun}}</option>

            @for ($i = $now; $i >= $last; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
           
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
