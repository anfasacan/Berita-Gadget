<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isi_spek;

class Isi_spekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function isi_spek()
    {
        $isi_spek = Isi_spek::all();
        return view('/isi_spek',compact('isi_spek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_isi_spek');
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
            'produk' => 'required',
            'gambar' => 'required'
        ]);

        //masukin data
        $isi_spek = new Isi_spek;
        $isi_spek -> id = $request->id;
        $isi_spek -> produk = $request->produk;
        $isi_spek -> tahun_rilis = $request->tahun_rilis;
        $isi_spek -> ringkasan = $request->ringkasan;
        $isi_spek -> body = $request->body;
        $isi_spek -> layar = $request->layar;
        $isi_spek -> os = $request->os;
        $isi_spek -> cpu = $request->cpu;
        $isi_spek -> ram = $request->ram;
        $isi_spek -> penyimpanan = $request->penyimpanan;
        $isi_spek -> gpu = $request->gpu;
        $isi_spek -> kamera = $request->kamera;
        $isi_spek -> batrai = $request->batrai;
        $isi_spek -> gambar = $request->gambar;
        $isi_spek -> fitur = $request->fitur;
        $isi_spek -> kategori = $request->kategori;

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('uploads/spek',$request->file('gambar')->getClientOriginalName());
            $isi_spek -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }

        $isi_spek -> save();

        return redirect('/admin/A_isi_spek')->with ('status','Data Isi Spesifikasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Isi_spek $isi_spek)
    {
        // $isi_spek = Isi_spek::all();
        return view('/isi_spek', compact('isi_spek')) ;
        // return $isi_spek;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Isi_spek $isi_spek)
    {
        return view('admin/update/edit_isi_spek',compact('isi_spek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Isi_spek $isi_spek)
    {
        Isi_spek::where('id',$isi_spek->id)
        ->update([
            'id' => $request -> id,
            'produk' => $request -> produk,
            'tahun_rilis' => $request -> tahun_rilis,
            'ringkasan' => $request -> ringkasan,
            'body' => $request -> body,
            'layar' => $request -> layar,
            'os' => $request -> os,
            'cpu' => $request -> cpu,
            'ram' => $request -> ram,
            'penyimpanan' => $request -> penyimpanan,
            'gpu' => $request -> gpu,
            'kamera' => $request -> kamera,
            'batrai' => $request -> batrai,
            'gambar' => $request -> gambar,
            'fitur' => $request -> fitur,
            'kategori' => $request -> kategori
        ]);

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('uploads/spek/',$request->file('gambar')->getClientOriginalName());
            $isi_spek -> gambar = $request -> file('gambar')-> getClientOriginalName();
            $isi_spek -> save();
        }


        return redirect('/admin/A_isi_spek')->with ('status','Data isi Spesifikasi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Isi_spek $isi_spek)
    {

        Isi_spek::destroy($isi_spek -> id);
        return redirect('/admin/A_isi_spek')->with ('status','Data Isi Spesifikasi Berhasil Dihapus');
        
    }
}
