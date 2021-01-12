<?php

namespace App\Http\Controllers;
use App\Home;
use App\Isi_berita;
use App\Spek_home;
use App\Video;
use App\Isi_spek;
use App\Daftar;
use App\Smartphone;
use App\Laptop;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function A_dashboard(Request $request)
    {
        if($request -> has('cari')){
            $daftar = \App\Daftar::where('konten','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            $daftar = Daftar::all();
           
        }
        return view('/admin/A_dashboard',(compact('daftar')));
    }

    public function A_home(Request $request)
    {
        if($request -> has('cari')){
            $home = \App\Home::where('judul','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            $home = Home::all();
        }
        // return view('home',(compact('home')));
        return view('/admin/A_home',(compact('home')));
    }

    public function A_spek_home(Request $request)
    {
        if($request -> has('cari')){
            $spek_home = \App\Spek_home::where('produk','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            $spek_home = Spek_home::all();
        }
        return view('/admin/A_spek_home',compact('spek_home'));
    }

    
    public function A_video(Request $request)
    {
        if($request -> has('cari')){
            $video = \App\Video::where('judul_video','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            $video = Video::all();
        }
        return view('/admin/A_video',(compact('video')));
    }
    
    public function A_isi_berita(Request $request)
    {
        if($request -> has('cari')){
            $berita = \App\Isi_berita::where('judul','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
          
            $berita = Isi_berita::all();
        }
        return view('/admin/A_isi_berita',(compact('berita')));
    }

    public function A_isi_spek(Request $request)
    {
        if($request -> has('cari')){
            $isi_spek = \App\Isi_spek::where('produk','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            
            $isi_spek = Isi_spek::all();
        }
        return view('/admin/A_isi_spek',(compact('isi_spek')));
    }

    public function A_T_smartphone(Request $request)
    {
        if($request -> has('cari')){
            $trob_smartphone = \App\Smartphone::where('trobosan','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            
            $trob_smartphone = Smartphone::all();
        }
        return view('/admin/A_T_smartphone',(compact('trob_smartphone')));
    }

    public function A_T_laptop(Request $request)
    {
        if($request -> has('cari')){
            $trob_laptop = \App\Laptop::where('trobosan','LIKE','%'. $request -> cari.'%')->get();
        } 
        else{
            
            
            $trob_laptop = Laptop::all();
        }
        return view('/admin/A_T_laptop',(compact('trob_laptop')));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
