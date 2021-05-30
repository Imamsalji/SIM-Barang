<?php

namespace App\Http\Controllers;

use App\Mutasi;
use App\Room;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasis = Mutasi::all();
        $rooms=room::get(); 

        return view ("mutasis.index",compact('mutasis','rooms',$mutasis, $rooms ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = room::all(); 

        return view('mutasis.create', compact('rooms',$rooms));

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
            'nama_barang' => 'required',
            'ruang_asal' => 'required',
            'ruang_tujuan' => 'required',
          
            ]);
            Mutasi::create($request->all());
            return redirect()->route('mutasis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(Mutasi $mutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutasi $mutasi)
    {
        $rooms=Room::all();

        return view('mutasis.edit', compact('mutasi','rooms'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutasi $mutasi)
    {
        $request->validate([
            'nama_barang'=> 'required',
            'ruang_asal' => 'required',
            'ruang_tujuan' => 'required',
            ]);
        $siswa->update($request->all());
  
        return redirect()->route('mutasis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutasi $mutasi)
    {
        $mutasi->delete();

        return redirect()->route('mutasis.index');
    }
}
