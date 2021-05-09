<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{room,rayon,klasifikasi,Tanah,dana};

class RoomController extends Controller
{
    public function index()
    {
        $getRow = Tanah::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $rooms = room::all();
	    return view ('ruangan.index',[
            'rooms' => $rooms,
            'rowCount' => $rowCount
            ]);
    }

    public function create(room $room)
    {
        $klasifikasis = klasifikasi::all();
        $rayons = rayon::all();
        $tanah = Tanah::all();
        $dana = dana::all();
        return view('ruangan.create',compact('klasifikasis','rayons','tanah','dana','room'));
    }

    public function store(Request $request)
    {
        $this->validasi($request);
        $luas = $request->panjang * $request->lebar;
        room::create([
            'klasifikasi_id' => $request->klasifikasi_id,
            'tanah_id' => $request->tanah_id,
            'noruang' => $request->noruang,
            'nama_ruang' => $request->nama_ruang,
            'rayon_id' => $request->rayon_id,
            'pjruangan' => $request->pjruangan,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'luas' => $luas,
            'regis' => $request->regis,
            'dana_id' => $request->dana_id,
            'kondisi_bangunan' => $request->kondisi_bangunan,
            'bertingkat' => $request->bertingkat,
            'beton' => $request->beton,
            
        ]);

        return redirect('ruangan')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $room = room::find($id);
        $klasifikasis = klasifikasi::all();
        $rayons = rayon::all();
        $tanah = Tanah::all();
        $dana = dana::all();
        return view('ruangan.edit',compact('room','klasifikasis','rayons','tanah','dana'));
    }

    public function update(Request $request, $id)
    {
        $this->validasi($request);
        $luas = $request->panjang * $request->lebar;
        $user = room::findorfail($id);
        $user->update([
            'klasifikasi_id' => $request->klasifikasi_id,
            'noruang' => $request->noruang,
            'nama_ruang' => $request->nama_ruang,
            'rayon_id' => $request->rayon_id,
            'tanah_id' => $request->tanah_id,
            'pjruangan' => $request->pjruangan,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'regis' => $request->regis,
            'dana_id' => $request->dana_id,
            'kondisi_bangunan' => $request->kondisi_bangunan,
            'bertingkat' => $request->bertingkat,
            'beton' => $request->beton,
            'luas' => $luas,
        ]);
        return redirect('/ruangan')->with('message', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $room = room::findorfail($id);
        $room->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }

    public function validasi(Request $request)
    {
        $validation = $request->validate([
            'klasifikasi_id' => 'required',
            'noruang' => 'required',
            'nama_ruang' => 'required',
            'rayon_id' => 'required',
            'pjruangan' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'regis' => 'required',
            'dana_id' => 'required',
            'kondisi_bangunan' => 'required',
            'bertingkat' => 'required',
            'beton' => 'required',
        ],
        [
            'klasifikasi_id.required' => 'harus diisi!',
            'noruang.required' => 'harus diisi!',
            'nama_ruang.required' => 'harus diisi!',
            'rayon_id.required' => 'harus diisi!',
            'pjruangan.required' => 'harus diisi!',
            'panjang.required' => 'harus diisi!',
            'lebar.required' => 'harus diisi!',
            'regis.required' => 'harus diisi!',
            'dana_id.required' => 'harus diisi!',
            'kondisi_bangunan.required' => 'harus diisi!',
            'bertingkat.required' => 'harus diisi!',
            'beton.required' => 'harus diisi!',
        ]);
    }
    public function klasifikasi()
    {
        $klasifikasis = klasifikasi::all();
        return view('ruangan.klasifikasi',compact('klasifikasis'));
    }

    public function rayon()
    {
        $rayons = rayon::all();
        return view('ruangan.rayon',compact('rayons'));
    }
    
    public function klasifikasistore(Request $request)
    {
        klasifikasi::create([
            'name' => $request->name,
            'klasifikasi' => $request->klasifikasi
        ]);
        
        return redirect('klasifikasi')->with('message', 'Data berhasil disimpan');
    }

    public function rayonstore(Request $request)
    {
        rayon::create([
            'name' => $request->name,
            'pjrayon' => $request->pjrayon
        ]);
        
        return redirect('rayon')->with('message', 'Data berhasil disimpan');
    }

    
    
    public function klasifikasistores(Request $request)
    {
        klasifikasi::create([
            'name' => $request->name,
            'klasifikasi' => $request->klasifikasi
        ]);
        
        return redirect('klasifikasi')->with('message', 'Data berhasil disimpan');
    }

    public function rayonstores(Request $request)
    {
        rayon::create([
            'name' => $request->name
        ]);
        
        return redirect('rayon')->with('message', 'Data berhasil disimpan');
    }
}
