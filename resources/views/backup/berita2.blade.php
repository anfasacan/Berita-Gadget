@extends('Layout/tember')

@section('title','Berita Gadget')
    
@section('posisi')
    {{-- Mulai posisi --}}
    <li class="colorlib-active"><a href="{{ url('/')}}">Home</a></li>
    <li ><a href="{{ url('/video')}}">Video</a></li>
    <li ><a href="{{url ('/spek')}}">Spesifikasi</a></li>
    <li><a href="{{url ('/tentang')}}">Tentang</a></li>
    {{-- Selesai Posisi --}}
@endsection


    @section('judul')
    {{$isi_berita -> judul}} 
    @endsection

    @section('awalgambar')
    {{-- Mulai gambar --}}
    <img src="uploads/{{$isi_berita -> gambar1}}" alt="" class="img-fluid" width = "500">
    {{-- Selesai Gambar  --}}
    @endsection

    @section('para1')
    {{$isi_berita -> para1}}
    @endsection

    @section('gambar2')
    {{-- Mulai gambar --}}
    <img src="images/{{$isi_berita -> gambar2}}" alt="" class="img-fluid" width = "500">
    {{-- Selesai Gambar  --}}
    @endsection

    @section('para2')
    {{$isi_berita -> para2}}
    @endsection

    @section('gambar3')
    {{-- Mulai gambar --}}
    <img src="images/{{$isi_berita -> gambar3}}" alt="" class="img-fluid" width = "500">
    {{-- Selesai Gambar  --}}
    @endsection

    @section('para3')
    {{$isi_berita -> para3}}
    @endsection
 
{{-- @endforeach --}}