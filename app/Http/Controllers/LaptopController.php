<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use App\Home;
use App\Smartphone;
use Illuminate\Support\Facades\Lang;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    public function trob_lap(Laptop $trob_lap)
    {
        $trob_smartphone = Smartphone::all();
        $trob_laptop = Laptop::all();
        $pilihan = $trob_lap -> trobosan;
        // $penjelasan = Laptop::all() -> where('penjelasan','LIKE','%' .$pilihan. '%');
        // $penjelasan = Laptop::all('penjelasan') -> where ('trobosan',$pilihan) -> first();
        // $penjelasan = "test123";
        $penjelasan_lap = Laptop::where('trobosan',$pilihan)->first();
        $home = Home::latest() -> where('trobosan','LIKE','%' .$pilihan. '%') -> paginate(5) ;
        // $home = Home::all() -> paginate(5);
        return view('home',compact('home','trob_lap','pilihan','trob_laptop','trob_smartphone','penjelasan_lap'));
        
        // $trobosanall = $trob_smart->Tsmart()->get();
        // return $trob_lap;
        // return $trob_smart;
        // return $pilihan;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_T_laptop');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trob_laptop = new Laptop;
        $trob_laptop -> id = $request->id;
        $trob_laptop -> trobosan = $request->trobosan;
        $trob_laptop -> penjelasan = $request->penjelasan;
        $trob_laptop -> tahun = $request->tahun;
       
        
       
        // return $request;
        $trob_laptop -> save();

        return redirect('/admin/A_T_laptop')->with ('status','Data Trobosan Laptop Berhasil Diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $trob_laptop)
    {
        return view('home', compact('trob_laptop')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $trob_lap)
    {
        return view('admin/update/edit_T_laptop',compact('trob_lap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $trob_lap)
    {
        Laptop::where('id',$trob_lap->id)
        ->update([
            'id' => $request -> id,
            'trobosan' => $request -> trobosan,
            'penjelasan' => $request -> penjelasan,
            'tahun' => $request -> tahun
          
            
            ]);

        return redirect('/admin/A_T_laptop')->with ('status','Data Trobosan Laptop Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $trob_lap)
    {
        Laptop::destroy($trob_lap -> id);
        return redirect('/admin/A_T_laptop')->with ('status','Data Trobosan Laptop Berhasil Dihapus');
    }
}
