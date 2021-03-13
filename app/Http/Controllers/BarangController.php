<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\{Barang,kategori,satuan,toko,dana,room};

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
	    return view ('barang.index',['barangs' => $barangs]);
    }

    public function create(Barang $barang)
    {
        $kategori = kategori::all();
        $satuan = satuan::all();
        $toko = toko::all();
        $dana = dana::all();
        $room = room::all();
        return view('barang.create',compact('kategori','satuan','barang','toko','dana','room'));
    }

    public function store(Request $request)
    {
        
        $this->validasi($request);
        Barang::create([
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
            'total' => $request->total,

        ]);

        return redirect('barang')->with('message', 'Data berhasil disimpan');
    }

    public function kategori()
    {
        $kategoris = kategori::all();
        return view('barang.kategori',compact('kategoris'));
    }

    public function satuan()
    {
        $satuans = satuan::all();
        return view('barang.satuan',compact('satuans'));
    }

    public function kategoristore(Request $request)
    {
        $kategori = kategori::where('name',$request->name)->first();
        if ($kategori === NULL) {
            //dd($request->name);
        }else {
            //dd($kategori->name);
        }

        kategori::create([
            'name' => $request->name
        ]);

        return redirect('create_barang')->with('message', 'Data berhasil disimpan');
    }

    public function satuanstore(Request $request)
    {
        satuan::create([
            'name' => $request->name,
            'jumlah' => $request->jumlah
        ]);
        
        return redirect('create_barang')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategori = kategori::all();
        $satuan = satuan::all();
        $toko = toko::all();
        $dana = dana::all();
        $room = room::all();
        return view('barang.edit', compact('barang','kategori','satuan','toko','dana','room'));
    }

    public function update(Request $request, $id)
    {
        $this->validasi($request);
        $barang = Barang::findorfail($id);
        $barang->update($request->all());
        return redirect('barang')->with('message', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $barang = Barang::findorfail($id);
        $barang->delete();
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
