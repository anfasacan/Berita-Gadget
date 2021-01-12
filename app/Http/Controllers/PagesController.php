<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Isi_berita;
use App\Kategori;
use App\Spek_home;
use App\Video;
use App\Isi_spek;
use App\Smartphone;
use App\Laptop;


class PagesController extends Controller
{
    public function home(Home $home)
    {
        // $home = Home::all();
        
        // return view('home', compact('home'));
        
        $trob_laptop = Laptop::all();
        $trob_smartphone = Smartphone::all();
        $home = Home::latest() -> paginate(5);
        return view('home',compact('home','trob_smartphone','trob_laptop'));
        
    }

    public function video(Video $video)
    {
        // $video = Video::all();
        // return view('video', compact('video'));
        $video = Video::latest() -> paginate(5);
        return view('video',compact('video'));
    }
    public function kategori()
    {
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }
    
    public function login()
    {
        return view('login');
    }

    public function speks(Spek_home $spek_home)
    {
        // $spek_home = Spek_home::all();
        // return view('spek', compact('spek_home'));
        $spek_home = Spek_home::latest() -> paginate(5);
        return view('spek',compact('spek_home'));
        
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function isi_berita()
    {
        $berita = Isi_berita::all();
        $video = Video::all();
        return view('berita',compact('isi_berita','video'));
    }

    public function isi_spek()
    {
        $isi_spek = Isi_spek::all();
        return view('isi_spek',compact('isi_spek'));
    }

    public function videonya()
    {
        $video = Video::all();
        return view('videonya',compact('video'));
    }

}
