<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isi_berita;
use App\Video;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function isi_berita()
    {
        $berita = Isi_berita::all();
        $video = Video::all();
        return view('berita',(compact('berita','video')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_isi_berita');
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
           
            'tanggal' => 'required',
            'judul' => 'required',
            'gambar1' => 'required',
            'para1' => 'required'
        ]);

        // return $request;
        $isi_berita = new Isi_berita;
        $isi_berita -> id = $request->id;
        $isi_berita -> tanggal= $request->tanggal;
        $isi_berita -> judul = $request->judul;
        $isi_berita -> gambar1 = $request->gambar1;
        $isi_berita -> para1 = $request->para1;
        $isi_berita -> gambar2 = $request->gambar2;
        $isi_berita -> para2 = $request->para2;
        $isi_berita -> gambar3 = $request->gambar3;
        $isi_berita -> para3 = $request->para3;
        $isi_berita -> kategori = $request->kategori;

        if($request -> hasFile('gambar1')){
            $request->file('gambar1') -> move('uploads/isi_berita',$request->file('gambar1')->getClientOriginalName());
            $isi_berita -> gambar1 = $request -> file('gambar1')-> getClientOriginalName();
        }

        if($request -> hasFile('gambar2')){
            $request->file('gambar2') -> move('uploads/isi_berita',$request->file('gambar2')->getClientOriginalName());
            $isi_berita -> gambar2 = $request -> file('gambar2')-> getClientOriginalName();
        }

        if($request -> hasFile('gambar3')){
            $request->file('gambar3') -> move('uploads/isi_berita',$request->file('gambar3')->getClientOriginalName());
            $isi_berita -> gambar3 = $request -> file('gambar3')-> getClientOriginalName();
        }

        $isi_berita -> save();

        return redirect('/admin/A_isi_berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\isi_berita $isi_berita
     * @return \Illuminate\Http\Response
     */
    public function show(Isi_berita $berita)
    {  
        return view('berita', compact('berita')) ;
        // return $berita;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Isi_berita $isi_berita)
    {
        // return $isi_berita;
        return view('admin/update/edit_isi_berita',compact('isi_berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Isi_berita $isi_berita)
    {
        Isi_berita::where('id',$isi_berita->id)
        ->update([
            'id' => $request -> id,
            'tanggal' => $request -> tanggal,
            'judul' => $request -> judul,
            'gambar1' => $request -> gambar1,
            'para1' => $request -> para1,
            'gambar2' => $request -> gambar2,
            'para2' => $request -> para2,
            'gambar3' => $request -> gambar3,
            'para3' => $request -> para3,
            'kategori' => $request -> kategori
        ]);

        if($request -> hasFile('gambar1')){
            $request->file('gambar1') -> move('uploads/isi_berita/',$request->file('gambar1')->getClientOriginalName());
            $isi_berita -> gambar1 = $request -> file('gambar1')-> getClientOriginalName();
            $isi_berita -> save();
        }

        if($request -> hasFile('gambar2')){
            $request->file('gambar2') -> move('uploads/isi_berita/',$request->file('gambar2')->getClientOriginalName());
            $isi_berita -> gambar2 = $request -> file('gambar2')-> getClientOriginalName();
            $isi_berita -> save();
        }

        if($request -> hasFile('gambar3')){
            $request->file('gambar3') -> move('uploads/isi_berita/',$request->file('gambar3')->getClientOriginalName());
            $isi_berita -> gambar3 = $request -> file('gambar3')-> getClientOriginalName();
            $isi_berita -> save();
        }


        return redirect('/admin/A_isi_berita')->with ('status','Data isi berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Isi_berita $isi_berita)
    {
        Isi_berita::destroy($isi_berita -> id);
        return redirect('/admin/A_isi_berita')->with ('status','Data Isi Berita Berhasil Dihapus');
    }
}
?>