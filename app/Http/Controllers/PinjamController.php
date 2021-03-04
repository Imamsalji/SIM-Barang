<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Barang;
use App\room;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjams = Pinjam::all();
        return view('pinjams.index',compact('pinjams'))    ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs=Barang::all();
        $rooms = room::all(); 
        return view('pinjams.create',compact('barangs','rooms', $barangs, $rooms));
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
             'pj' => 'required',
             'ruang' => 'required',
             'jumlah' => 'required',
             'kondisi' => 'required'
          
        ]);
            Pinjam::create($request->all());
            return redirect()->route('pinjam');
            \Session::flash('sukses','Transaksi berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam  $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjam $pinjam)
    {
        $barangs=Barang::get(); 
        $rooms=room::get(); 
        return view('pinjams.edit', compact('pinjam','barangs','rooms'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjam $pinjam)
    {
        $pinjam->update($request->all());
  
        return redirect()->route('pinjams.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjam  $id)
    {
        $id->delete();
  
        return redirect()->route('pinjam')
                        ->with('success','Deleted successfully');
    }
}
