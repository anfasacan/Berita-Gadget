<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Home;
use App\Smartphone;
use App\Laptop;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kategori()
    {
        $kategori = Kategori::all();
        // return view('kategori'-> with (compact('kategori')));

    }

    public function kategori_smartphone()
    {
        $trob_smartphone = Smartphone::all();
        $trob_laptop = Laptop::all();
        $home = Home::latest() -> where('kategori','LIKE','%' .'Smartphone'. '%') -> paginate(5) ;
        return view('home',compact('home','trob_smartphone','trob_laptop'));
    }

    public function kategori_laptop()
    {
        $trob_smartphone = Smartphone::all();
        $trob_laptop = Laptop::all();
        $home = Home::latest() -> where('kategori','LIKE','%' .'Laptop'. '%') -> paginate(5);
        return view('home',compact('home','trob_smartphone','trob_laptop'));
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
