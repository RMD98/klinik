<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Jadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('jadwal')->get();
        return view('jadwal/jadwal',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jadwal/add');
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
        $data = array(
            // 'user_id' => \Auth::user()->id,
            'pelayanan' => $request->layanan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam, 
        );

        DB::table('jadwal')->insert($data);

        return redirect('/jadwal');
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
        $data = DB::table('jadwal')->where('id',$id)->first();
        return view('/jadwal/edit',compact('data'));
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
            'user_id' => \Auth::user()->id,
            'pelayanan' => $request->layanan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam, 
        );
        DB::table('jadwal')->where('id',$id)->update($data);

        return redirect('/jadwal');
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
        DB::table('jadwal')->where('id',$id)->delete();
        return view('/jadwal');
    }
}
