<?php

namespace App\Http\Controllers;

use App\{Habis};
use App\{kategori,satuan,toko,dana,room};
use Illuminate\Http\Request;

class HabisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habis = Habis::all();
	    return view ('habis.index',compact('habis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Habis $habis)
    {
        $kategori = kategori::all();
        $satuan = satuan::all();
        $toko = toko::all();
        $dana = dana::all();
        $room = room::all();
        return view('habis.create',compact('kategori','satuan','habis','toko','dana','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validasi($request);
        Habis::create([
            'kode_barang' => $request->kode_barang,
            'kategori_id' => $request->kategori_id,
            'nama_barang' => $request->nama_barang,
            'satuan_id' => $request->satuan_id,
            'toko_id' => $request->toko_id,
            'dana_id' => $request->dana_id,
            'room_id' => $request->room_id,
            'spek' => $request->spek,
            'merk' => $request->merk,
            'no_seri' => $request->no_seri,
            'tgl_masuk' => $request->tgl_masuk,
            'no_faktur' => $request->no_faktur,
            'harga' => $request->harga,
        ]);

        return redirect('habis')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Habis  $habis
     * @return \Illuminate\Http\Response
     */
    public function show(Habis $habis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Habis  $habis
     * @return \Illuminate\Http\Response
     */
    public function edit(Habis $habi)
    {
        $habis = $habi;
        $kategori = kategori::all();
        $satuan = satuan::all();
        $toko = toko::all();
        $dana = dana::all();
        $room = room::all();
        return view('habis.edit', compact('habis','kategori','satuan','toko','dana','room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Habis  $habis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habis $habi)
    {
        $this->validasi($request);
        $habi->update($request->all());
        return redirect()->route('habis.index')
                        ->with('message','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Habis  $habis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habis $habi)
    {
        $habi->delete();  
        return back()->with('delete', 'Data berhasil dihapus');
    }

    public function validasi(Request $request)
    {
        $validation = $request->validate([
            'kode_barang' => 'required',
            'kategori_id' => 'required',
            'nama_barang' => 'required',
            'satuan_id' => 'required',
            'toko_id' => 'required',
            'dana_id' => 'required',
            'room_id' => 'required',
            'spek' => 'required',
            'merk' => 'required',
            'no_seri' => 'required',
            'tgl_masuk' => 'required',
            'no_faktur' => 'required',
            'harga' => 'required',
        ],
        [
            'kode_barang.required' => 'harus diisi!',
            'kategori_id.required' => 'harus diisi!',
            'nama_barang.required' => 'harus diisi!',
            'satuan_id.required' => 'harus diisi!',
            'toko_id.required' => 'harus diisi!',
            'dana_id.required' => 'harus diisi!',
            'room_id.required' => 'harus diisi!',
            'spek.required' => 'harus diisi!',
            'merk.required' => 'harus diisi!',
            'no_seri.required' => 'harus diisi!',
            'tgl_masuk.required' => 'harus diisi!',
            'no_faktur.required' => 'harus diisi!',
            'harga.required' => 'harus diisi!',
        ]);
    }
}
