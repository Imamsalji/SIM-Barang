<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{input,dana,toko};

class InputController extends Controller
{
    public function index()
    {
        $inputs = input::all();
	    return view ('input.index',['inputs' => $inputs]);
    }

    public function create(Input $input)
    {
        $dana = dana::all();
        $toko = toko::all();
        return view('input.create',compact('dana','toko','input'));
    }
    public function createtwo(Input $input)
    {
        $dana = dana::all();
        $toko = toko::all();
        return view('input.createtwo',compact('dana','toko','input'));
    }

    public function store(Request $request)
    {
        // pembelian ada toko sama dana
        if ($request->nama_pemberi == NULL) {
            $this->validasi($request);
            input::create([
                'name' => $request->name,
                'jenis_masuk' => $request->jenis_masuk,
                'nama_pemberi' => $request->nama_pemberi,
                'dana_id' => $request->dana_id,
                'toko_id' => $request->toko_id,
                'tgl_faktur' => $request->tgl_faktur,
                'nofaktur' => $request->nofaktur,
            ]);
    
            return redirect('input')->with('message', 'Data berhasil disimpan');
        }else {
            // pemberian tidak ada dana dan toko
            $this->_validasi($request);
            input::create([
                'name' => $request->name,
                'jenis_masuk' => $request->jenis_masuk,
                'nama_pemberi' => $request->nama_pemberi,
                'dana_id' => $request->dana_id,
                'toko_id' => $request->toko_id,
                'tgl_faktur' => $request->tgl_faktur,
                'nofaktur' => $request->nofaktur,
            ]);
            return redirect('input')->with('message', 'Data berhasil disimpan');
        }
    }

    public function edit($id)
    {
        $input = input::find($id);
        $dana = dana::all();
        $toko = toko::all();
        return view('input.edit', compact('input','dana','toko'));
    }

    public function update(Request $request, $id)
    {
        $this->validasi($request);
        $input = input::findorfail($id);
        $input->update($request->all());
        return redirect('input')->with('message', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $input = input::findorfail($id);
        $input->delate();
        return back()->with('delete', 'Data berhasil dihapus');
    }

    public function dana()
    {
        $danas = dana::all();
        return view('input.dana',compact('danas'));
    }

    public function toko()
    {
        $tokos = toko::all();
        return view('input.toko',compact('tokos'));
    }

    public function danastore(Request $request)
    {
        dana::create([
            'pemberi' => $request->pemberi
        ]);

        return redirect('dana')->with('message', 'Data berhasil disimpan');
    }

    public function tokostore(Request $request)
    {
        toko::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
        ]);

        return redirect('toko')->with('message', 'Data berhasil disimpan');
    }
    // pembelian validasi
    public function validasi(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'jenis_masuk' => 'required',
            'dana_id' => 'required',
            'toko_id' => 'required',
            'tgl_faktur' => 'required',
            'nofaktur' => 'required',
        ],
        [
            'name.required' => 'harus diisi!',
            'jenis_masuk.required' => 'harus diisi!',
            'dana_id.required' => 'harus diisi!',
            'toko_id.required' => 'harus diisi!',
            'tgl_faktur.required' => 'harus diisi!',
            'nofaktur.required' => 'harus diisi!',
        ]);
    }

    //pemberian validasi
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
