<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Pages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pages')->get();
        return view('pages/pages',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages/add');
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
        if($request->file('gambar')){
            $gambar=$request->file('gambar')->storePublicly($request->jenis,'public');
        } else {
            $gambar = null;
        }
        $data = array(
            "judul" =>$request->judul,
            "konten" =>$request->konten,
            "status" =>$request->status,
            "jenis" => $request->jenis,
            "gambar" =>$gambar,
        );
        DB::table('pages')->insert($data);
        return redirect('/pages');
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
        $data = DB::table('pages')->where('id',$id)->first();
        return view('pages/edit',compact('data'));
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
        $data = array(
            "judul" =>$request->judul,
            "konten" =>$request->konten,
            "status" =>$request->status,
            "jenis" => $request->jenis,
        );
        if($request->file('gambar')){
            $gambar=$request->file('gambar')->storePubliclyAs('',$request->judul);
            $data = array_merge_recursive($data,['gambar'=>$gambar]);
        } 

        DB::table('pages')->where('id',$id)->update($data);

        return redirect('/pages');
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
        $gambar = DB::table('pages')->where('id',$id)->select('gambar')->first();
        if($gambar){
            \Storage::delete($gambar->gambar);
        };
        DB::table('pages')->where('id',$id)->delete();
        return redirect('/pages');
    }
}
