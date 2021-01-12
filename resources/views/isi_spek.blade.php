@extends('Layout/temp')
			

@section('title','Berita GADGET - Spesifikasi')
    
@section('posisi')
    {{-- Mulai posisi --}}
    <li ><a href="{{ url('/')}}">Home</a></li>
    <li ><a href="{{ url('/video')}}">Video</a></li>
    <li class="colorlib-active"><a href="{{url ('/spek')}}">Spesifikasi</a></li>
    <li><a href="{{url ('/tentang')}}">Tentang</a></li>
    {{-- Selesai Posisi --}}
@endsection

@section('JudulandGambar')

<style>
    div.mar10 {
  margin-left: 23%;
}
</style>
    <div class="mar10">
        <center><h1>{{$isi_spek -> produk}}</h1></center>
            <div>
                <center>
                    <center>
                    <img src="{{ URL::to ('/')}}/uploads/spek/{{$isi_spek -> gambar}}"  width = "300" height="300">
                    </center>
                </center>
            </div>
    </div>


@endsection

@section('isi')
<!-- BORDERED TABLE -->
<center>
    <div class="card mr-xl-5 ml-lg-5" mx-auto>
        <div class="card-body">
            <h3>ringkasan</h3>
          {{$isi_spek -> ringkasan}}
        </div>
      </div>
    </center>
        
     
    <div>
        <div>
       <center><table class="table table-bordered" style="margin-top:10px;">
            <tbody>
                <tr>
                    <td><b>Tahun Rilis</b></td>
                    <td>{{$isi_spek -> tahun_rilis}}</td>
                </tr>
                <tr>
                    <td><b>Body / ukuran</b></td>
                    <td>{{$isi_spek -> body}}</td>
                </tr>
                <tr>
                    <td><b>Layar</b></td>
                    <td>{{$isi_spek -> layar}}</td>
                </tr>
                <tr>
                    <td><b>Opration System</b></td>
                    <td>{{$isi_spek -> os}}</td>
                </tr>
                <tr>
                    <td><b>Processor</b></td>
                    <td>{{$isi_spek -> cpu}}</td>
                </tr>
                <tr>
                    <td><b>RAM</b></td>
                    <td>{{$isi_spek -> ram}}</td>
                </tr>
                <tr>
                    <td><b>Storage / Penyimpanan</b></td>
                    <td>{{$isi_spek -> penyimpanan}}</td>
                </tr>
                <tr>
                    <td><b>Graphic Card / GPU</b></td>
                    <td>{{$isi_spek -> gpu}}</td>
                </tr>
                <tr>
                    <td><b>Kamera</b></td>
                    <td>{{$isi_spek -> kamera}}</td>
                </tr>
                <tr>
                    <td><b>Baterai</b></td>
                    <td>{{$isi_spek -> batrai}}</td>
                </tr>
                    <td><b>Fitur</b></td>
                    <td>{{$isi_spek -> fitur}}</td>
                </tr>
            </tbody>
        </table>
    </center> 
    </div>
    </div>

<!-- END BORDERED TABLE -->
<style>
    td:first-child { width: 20% ;}
</style>
@endsection