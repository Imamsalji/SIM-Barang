<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\{Barang,kategori,satuan};

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
        return view('barang.create',compact('kategori','satuan','barang'));
    }

    public function store(Request $request)
    {
        $this->validasi($request);
        Barang::create([
            'kode_barang' => $request->kode_barang,
            'kategori_id' => $request->kategori_id,
            'nama_barang' => $request->nama_barang,
            'satuan_id' => $request->satuan_id,
            'kondisi_baik' => $request->kondisi_baik,
            'kondisi_rusak' => $request->kondisi_rusak,
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
        return view('barang.edit', compact('barang','kategori','satuan'));
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
            'kondisi_baik' => 'required',
            'kondisi_rusak' => 'required',
            'total' => 'required',
        ],
        [
            'kode_barang.required' => 'harus diisi!',
            'kategori_id.required' => 'harus diisi!',
            'nama_barang.required' => 'harus diisi!',
            'satuan_id.required' => 'harus diisi!',
            'kondisi_baik.required' => 'harus diisi!',
            'kondisi_rusak.required' => 'harus diisi!',
            'total.required' => 'harus diisi!',
        ]);
    }
}
