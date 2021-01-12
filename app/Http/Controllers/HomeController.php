<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Isi_berita;
use App\Kategori;
use App\Laptop;
use App\Smartphone;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
        
        // if($home -> has('cari')){
        //     $home = \App\Home::where('judul','LIKE','%'. $home -> cari.'%')->get();
        // } else{
        //     $home = Home::all();
        // }
        $trob_smartphone = Smartphone::all();
        $trob_laptop = Laptop::all();
        $penjelasan = " ";
        if($request -> has('cari')){
            $data_cari = Home::where('judul','LIKE','%' .$request -> cari. '%')-> get();
            
        }
        else{
            $data_cari = Home::all();
            
        }
       
        
        $home = Home::where('judul',  $request -> cari )
        ->orWhere('judul', 'LIKE', '%' . $request -> cari . '%')
        -> latest()
        ->paginate(5);
        $home->appends(['cari' => $request->cari]);
        
        return view ('home',compact('home','trob_smartphone','trob_laptop','penjelasan'));
        
        // $home = Home::where('judul', $request->cari)-> orWhere -> ('judul','like','%' .$request->cari. '%') -> paginate(5);
       
        // $home = Home::where('judul','LIKE','%' .$request -> cari. '%') -> paginate(5);
        // $home->appends (array ('cari' => $request));
        // $home->appends(['cari' => $request]);
       
       
     
    }

public function getkat()
{
       // mengambil data pegawai yang bernama Jamal Uwais
 
    
}

    // public function index()
    // {
       
    // }

    public function search(Request $request)
	{
        $trob_smart = Smartphone::all();
        $trob_lap = Laptop::all();
        if($request -> has('cari')){
            $data_cari = Home::where('judul','LIKE','%' .$request -> cari. '%')-> get() -> paginate(5);
        }
        else{
            $data_cari = Home::all();
        }
        return view ('home',compact('data_cari','trob_smart','trob_lap'));
    }

    public function showall(Home $data_cari)
    {
        return view ('berita',compact('data_cari','trob_smart','trob_lap'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trob_smart = Smartphone::all();
        $trob_lap = Laptop::all();
        return view('admin/create/create_home',compact('trob_smart','trob_lap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required'
        ]);

        //masukin data
        $home = new Home;
        $home -> id = $request->id;
        $home -> judul = $request->judul;
        $home -> ringkasan = $request->ringkasan;
        $home -> tanggal = $request->tanggal;
        $home -> gambar = $request->gambar;
        $home -> kategori = $request->kategori;
        $home -> trobosan = $request->trobosan;

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('uploads/home',$request->file('gambar')->getClientOriginalName());
            $home -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }

        $home -> save();

        return redirect('/admin/A_home')->with ('status','Data Home Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Isi_berita $isi_berita)
    {  
        return view('berita', compact('isi_berita')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        $trob_smart = Smartphone::all();
        $trob_lap = Laptop::all();
        return view('admin/update/edit_home',compact('home','trob_smart','trob_lap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        
        Home::where('id',$home->id)
            ->update([
                'id' => $request -> id,
                'judul' => $request -> judul,
                'ringkasan' => $request -> ringkasan,
                'tanggal' => $request -> tanggal,
                'gambar' => $request -> gambar,
                'kategori' => $request -> kategori,
                'trobosan' => $request -> trobosan
            ]);

            if($request -> hasFile('gambar')){
                $request->file('gambar') -> move('uploads/home/',$request->file('gambar')->getClientOriginalName());
                $home -> gambar = $request -> file('gambar')-> getClientOriginalName();
                $home -> save();
            }

            return redirect('/admin/A_home')->with ('status','Data Home Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        Home::destroy($home -> id);
        return redirect('/admin/A_home')->with ('pesan','Data Home Berhasil Dihapus');
    }


}
