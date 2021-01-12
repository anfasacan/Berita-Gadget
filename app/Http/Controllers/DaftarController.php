<?php

namespace App\Http\Controllers;

use App\Daftar;
use App\Home;
use App\Spek_home;
use App\Video;
use App\Isi_berita;
use App\Isi_spek;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Daftar()
    {
        $daftar = Daftar::all();
        // return view('/isi_spek',compact('isi_spek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'konten' => 'required'
        ]);

        //masukin data

        //home_default
        $home = New Home;
        $home -> id = $request->id;
        $home -> judul = $request -> konten;
        $home -> kategori = $request -> kategori;
        
        //isi berita default
        $isi_berita = New Isi_berita;
        $isi_berita -> id = $request -> id;
        $isi_berita -> judul = $request -> konten;
        $isi_berita -> kategori = $request -> kategori;

        //isi spek default
        $isi_spek = new Isi_spek;
        $isi_spek -> id = $request -> id;
        $isi_spek -> produk = $request -> konten;
        $isi_spek -> kategori = $request -> kategori;

        //spek home default
        $spek_home = new Spek_home;
        $spek_home -> id = $request -> id;
        $spek_home -> produk = $request -> konten;
        $spek_home -> kategori = $request -> kategori;


        //video default
        $video = new Video;
        $video -> id = $request -> id;
        $video -> judul_video = $request -> konten;
        $video -> kategori = $request -> kategori;

        //daftar default
        $daftar = new Daftar;
        $daftar -> id = $request->id;
        $daftar -> konten = $request->konten;
        $daftar -> kategori = $request->kategori;

        $daftar -> save();
        $home -> save();
        $video -> save();
        $spek_home -> save();
        $isi_spek -> save();
        $isi_berita -> save();

        return redirect('/admin/A_dashboard')->with ('status','Data konten Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        return view('admin/update/edit_daftar',compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        Daftar::where('id',$daftar->id)
        ->update([
            'id' => $request -> id,
            'konten' => $request -> konten,
            'kategori' => $request -> kategori
        ]);

        return redirect('/admin/A_dashboard')->with ('status','Data Daftar konten Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        Daftar::destroy($daftar -> id);
        return redirect('/admin/A_dashboard')->with ('status','Data Daftar Konten Berhasil Dihapus');
    }
}
