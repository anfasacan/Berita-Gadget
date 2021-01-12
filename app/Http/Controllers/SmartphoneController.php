<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spek_home;
use App\Smartphone;
use App\Home;
use App\Laptop;

class SmartphoneController extends Controller
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

    public function trobosanS()
    {
        $trob_smart = Smartphone::all();
        return view('home',compact('trob_smart'));
    }

    public function trob_smart(Smartphone $trob_smart)
    {
        $trob_laptop = Laptop::all();
        $trob_smartphone = Smartphone::all();
        $pilihan = $trob_smart -> trobosan;
        $penjelasan_smart = Smartphone::where('trobosan',$pilihan)->first();
        $home = Home::latest() -> where('trobosan','LIKE','%' .$pilihan. '%') -> paginate(5) ;
        // $home = Home::all() -> paginate(5);
        // return view('home',compact('home','trob_smart','pilihan','trob_smartphone','trob_laptop','penjelasan_smart'));
        
        // $trobosanall = $trob_smart->Tsmart()->get();
        // return $trobosanall;
        return $trob_smart;
        // return $pilihan;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create/create_T_smartphone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $trob_smartphone = new Smartphone;
        $trob_smartphone -> id = $request->id;
        $trob_smartphone -> trobosan = $request->trobosan;
        $trob_smartphone -> penjelasan = $request->penjelasan;
        $trob_smartphone -> tahun = $request->tahun;
       
        
       
        // return $request;
        $trob_smartphone -> save();

        return redirect('/admin/A_T_smartphone')->with ('status','Data Trobosan Smartphone Berhasil Diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Smartphone $trob_smartphone)
    {
        return view('home', compact('trob_smartphone')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Smartphone $trob_smart)
    {
        return view('admin/update/edit_T_smartphone',compact('trob_smart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Smartphone $trob_smart)
    {
        Smartphone::where('id',$trob_smart->id)
        ->update([
            'id' => $request -> id,
            'trobosan' => $request -> trobosan,
            'penjelasan' => $request -> penjelasan,
            'tahun' => $request -> tahun
          
            
            ]);

        return redirect('/admin/A_T_smartphone')->with ('status','Data Trobosan Smartphone Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smartphone $trob_smart)
    {
        Smartphone::destroy($trob_smart -> id);
        return redirect('/admin/A_T_smartphone')->with ('status','Data Trobosan Smartphone Berhasil Dihapus');
    }
}
