<?php

namespace App\Http\Controllers;

use App\Perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
   
	public function upload(){
		$perbaikan = Perbaikan::get();
		return view('perbaikan.index',['perbaikan' => $perbaikan]);
	}
 

    public function create(){
        return view('perbaikan.upload');
    }
	public function store(Request $request){
		$this->validate($request, [
            'nama'=> 'required',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10048',
			'ket' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Perbaikan::create([
			'nama'=> $request->nama,
            'file' => $nama_file,
			'ket' => $request->ket,
		]);
        
        return redirect('perbaikan')->with('message', 'Data berhasil disimpan');
	}

    public function destroy($id)
    {
        $perbaikan = Perbaikan::find($id);
        $perbaikan->delete();
        return back()->with('Delete', 'Data berhasil dihapus');
    }
}