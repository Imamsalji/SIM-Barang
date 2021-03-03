<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjamans = Pinjaman::all();
        return view('pinjamans.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pinjamans.create');
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
            'pj' => 'Mohon isi dengan angka atau huruf',
            'ruang' => 'Mohon isi dengan angka atau huruf',
            'jumlah' => 'Mohon isi dengan angka atau huruf',
            'kondisi' => 'Mohon isi dengan angka atau huruf'
          
            ]);
            Pinjaman::create($request->all());
            return redirect()->route('pinjamans.index');
            \Session::flash('sukses','Transaksi berhasil diupdate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman  $pinjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinjaman $pinjaman)
    {
        return view('pinjamans.edit', compact('pinjaman'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinjaman $pinjaman)
    {
        $pinjaman->update($request->all());
  
        return redirect()->route('pinjamans.index')
                        ->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();
  
        return redirect()->route('pinjamans.index')
                        ->with('success','Deleted successfully');
    }
}
