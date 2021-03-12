<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanah;

class TanahController extends Controller
{
    public function index()
    {
        $tanahs = Tanah::all();
        return view('Tanah.index', compact('tanahs'));
    }

    public function create(Tanah $Tanah)
    {
        return view('Tanah.create',compact('Tanah'));
    }

    public function store(Request $request)
    {
        Tanah::create($request->all());
        return redirect('/Tanah')->with('message', 'Data berhasil disimpan');
    }

    public function edit(Tanah $Tanah)
    {
        $tanah = $Tanah;
        return view('Tanah.edit', compact('tanah'));
    }
    
    public function update(Request $request,Tanah $Tanah)
    {
        Tanah::findOrFail($request->id)->update($request->all());
        return redirect('/Tanah');
    }

    public function show(Tanah $Tanah)
    {
        return view('Tanah.show',compact('Tanah'));
    }

    public function destroy(Tanah $Tanah)
    {
        
        $Tanah->delete();
        return back();
    }

    public function _validasi(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'jenis_masuk' => 'required',
            'nama_pemberi' => 'required',
            'tgl_faktur' => 'required',
            'nofaktur' => 'required',
        ],
        [
            'name.required' => 'harus diisi!',
            'jenis_masuk.required' => 'harus diisi!',
            'nama_pemberi.required' => 'harus diisi!',
            'tgl_faktur.required' => 'harus diisi!',
            'nofaktur.required' => 'harus diisi!',
        ]);
    }
    
}
