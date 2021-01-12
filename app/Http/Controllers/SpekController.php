<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spek_home;
use App\Isi_spek;
class SpekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spek_home(Request $request)
    {

        if($request -> has('cari')){
            $spek_home = \App\Spek_home::where('produk','LIKE','%'. $request -> cari.'%')->get();
        } else{
            
            $spek_home = Spek_home::all();
        }

        $spek_home = Spek_home::where('produk',  $request -> cari )
        ->orWhere('produk', 'LIKE', '%' . $request -> cari . '%')
        -> latest()
        ->paginate(5);
        $spek_home->appends(['cari' => $request->cari]);

        // $spek_home = Spek_home::where('produk','LIKE','%' .$request -> cari. '%') -> paginate(5);
        return view('spek',(compact('spek_home')));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_spek_home');
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
            'gambar' => 'required',
            
        ]);

        $spek_home = new Spek_home;
        $spek_home -> id = $request->id;
        $spek_home -> produk = $request->produk;
        $spek_home -> gambar = $request->gambar;
        $spek_home -> ringkasan = $request->ringkasan;
        $spek_home -> link = $request->link;
        $spek_home -> kategori = $request->kategori;
        
        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('uploads/spek/',$request->file('gambar')->getClientOriginalName());
            $spek_home -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }
        
        $spek_home -> save();

        return redirect('/admin/A_spek_home')->with ('status','Data Spesifikasi Home Berhasil Diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Isi_spek $isi_spek)
    {  
        return view('isi_spek', compact('isi_spek')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Spek_home $spek_home)
    {
        return view('admin/update/edit_spek_home',compact('spek_home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spek_home $spek_home)
    {
        Spek_home::where('id',$spek_home->id)
        ->update([
            'id' => $request -> id,
            'produk' => $request -> produk,
            
            'ringkasan' => $request -> ringkasan,
            'link' => $request -> link,
            'kategori' => $request -> kategori
            
            ]);
             if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('uploads/spek/',$request->file('gambar')->getClientOriginalName());
            $spek_home -> gambar = $request -> file('gambar')-> getClientOriginalName();
            $spek_home -> save();
        }

        return redirect('/admin/A_spek_home')->with ('status','Data Spesifikasi Home Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spek_home $spek_home)
    {
        Spek_home::destroy($spek_home -> id);
        return redirect('/admin/A_spek_home')->with ('status','Data Isi Berita Berhasil Dihapus');
    }
}
