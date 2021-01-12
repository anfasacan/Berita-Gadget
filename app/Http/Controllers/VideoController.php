<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function video(Request $request)
    {
        if($request -> has('cari')){
            $video = \App\Video::where('judul_video','LIKE','%'. $request -> cari.'%')->get();
        } else{
            $video = Video::all();
        }

        $video = Video::where('judul_video',  $request -> cari )
        ->orWhere('judul_video', 'LIKE', '%' . $request -> cari . '%')
        -> latest()
        ->paginate(5);
        $video->appends(['cari' => $request->cari]);

        // $video = Video::where('judul_video','LIKE','%' .$request -> cari. '%') -> paginate(5);
        return view('video',with (compact('video')));

    }

    public function videonya(Video $video)
    {
        $video = Video::all();
        return view('/videonya',compact('video'));
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
        return view('admin/create/create_video');
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
           
            'judul_video' => 'required',
            'videonya' => 'required'
        ]);

        // return $request;
        $video = new Video;
        $video -> id = $request->id;
        $video -> judul_video = $request->judul_video;
        $video -> ringkasan_video = $request->ringkasan_video;
        $video -> videonya = $request->videonya;
        $video -> kategori = $request->kategori;
        

        $video -> save();

        return redirect('/admin/A_video')->with ('status','Data Home Berhasil Ditambahkan');
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
    public function edit(Video $video)
    {
        return view('admin/update/edit_video',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        Video::where('id',$video->id)
        ->update([
            'id' => $request -> id,
            'judul_video' => $request -> judul_video,
            'ringkasan_video' => $request -> ringkasan_video,
            'videonya' => $request -> videonya,
            'kategori' => $request -> kategori
            
            ]);

        return redirect('/admin/A_video')->with ('status','Data video Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        Video::destroy($video -> id);
        return redirect('/admin/A_video')->with ('status','Data video Berhasil Dihapus');
    }
}
