<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{room,rayon,klasifikasi};

class RoomController extends Controller
{
    public function index()
    {
        $rooms = room::all();
	    return view ('ruangan.index',['rooms' => $rooms]);
    }

    public function create()
    {
        $klasifikasis = klasifikasi::all();
        $rayons = rayon::all();
        return view('ruangan.create',compact('klasifikasis','rayons'));
    }

    public function store(Request $request)
    {
        $this->validasi($request);
        
        room::create([
            'klasifikasi_id' => $request->klasifikasi_id,
            'noruang' => $request->noruang,
            'nama_ruang' => $request->nama_ruang,
            'rayon_id' => $request->rayon_id,
            'pjruangan' => $request->pjruangan,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'luas' => $request->luas,
        ]);

        return redirect('ruangan')->with('message', 'Data berhasil disimpan');
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
            'luas' => 'required',
        ],
        [
            'klasifikasi_id.required' => 'harus diisi!',
            'noruang.required' => 'harus diisi!',
            'nama_ruang.required' => 'harus diisi!',
            'rayon_id.required' => 'harus diisi!',
            'pjruangan.required' => 'harus diisi!',
            'panjang.required' => 'harus diisi!',
            'lebar.required' => 'harus diisi!',
            'luas.required' => 'harus diisi!',
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
            'name' => $request->name
        ]);
        
        return redirect('rayon')->with('message', 'Data berhasil disimpan');
    }

    
    
}
