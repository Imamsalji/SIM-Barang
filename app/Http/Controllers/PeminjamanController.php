<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Habis;
use App\room;

class PeminjamanController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $peminjamans = Peminjaman::with('habis')->latest()->get();
        return view('peminjamans.index',compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habis = Habis::where('total', '>', 0)->get();
        $rooms = room::all(); 
      
        return view('peminjamans.create',compact('habis','rooms', $habis, $rooms));
      
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
            'barang_id' => 'required',
            'jumlah' => 'required',
           
         
       ]);
   //Transaksi
   $habis = Habis::find($request->barang_id);
   $sisa_stok = $habis->total - $request->jumlah;
   $habis->update([
       'total' => $sisa_stok
   ]);
   //End Transaksi

       Peminjaman::create([
           'pj' => $request->pj,
           'ruang' => $request->ruang,
           'barang_id' => $request->barang_id,
           'jumlah' => $request->jumlah,
           
       ]);

       return redirect('peminjaman')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjamans = Peminjaman::findorfail($id);
        $peminjamans->delete();
        return back()->with('Delete', 'Data berhasil dihapus');
    }
    
}
