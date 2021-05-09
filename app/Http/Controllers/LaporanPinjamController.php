<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{LaporanPinjam,Pinjam,Peminjaman};
use PDF;

class LaporanPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanpinjams=LaporanPinjam::latest()->paginate(5);

        return view('laporanpinjams\index',compact('laporanpinjams'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tanah()
    {
        $getRow = Pinjam::orderBy('id', 'DESC')->get();
        $row = Peminjaman::orderBy('id', 'DESC')->get()->count();
        $rowCount = $getRow->count();
        $pinjams=Pinjam::all();
        $pinjamans=Peminjaman::all();

        return view('laporan.kiba',compact('pinjams','rowCount','row','pinjamans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function alat()
    {
        $pinjamans=Peminjaman::all();
        $pinjams=Pinjam::all();
        return view('laporan.kibb',compact('pinjamans','pinjams'));
    }

    public function ruangan()
    {
        $getRow = Pinjam::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $pinjams=Pinjam::all();

        return view('laporan.kibc',compact('pinjams','rowCount'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Laporanpinjams  $laporanpinjams
     * @return \Illuminate\Http\Response
     */
    // public function show(Laporanpinjam $laporanpinjam)
    // {
    //     return view('laporanpinjams.show',compact('laporanpinjams'));
    // }

    public function cari(Request $request)
    {
        $request->validate([
            'startDate'=> 'required',
            'endDate'=> 'required',
            ]);
        $from = $request->startDate;
        $to = $request->endDate;
        $title="Laporan From: ".$from."To:".$to;
        $startDate = $from.' 00:00:00';
        $endDate = $to.' 23:59:59';

        $laporanpinjams = Laporanpinjam::whereBetween('created_at', [$startDate,$endDate])->latest()->paginate(5);
        
        return view('laporanpinjams.index', compact('laporanpinjams', 'startDate', 'endDate'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function print(Request $request)
    {

       
        $laporanpinjams = $request->transaction;
        $from = $request->startDate;
        $to = $request->endDate;

        $title ="Laporan Peminjaman From: ".$from."To:".$to;
        $redirect = route('laporanpinjam');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;

            $laporanpinjams = LaporanPinjam::whereBetween('created_at', [$startDate,$endDate])->latest()->paginate(5);
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];

            return view('laporanpinjams.print', compact('laporanpinjams', 'startDate', 'endDate', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }else{
            $laporanpinjams = LaporanPinjam::latest()->paginate(5);

            return view('laporanpinjams.print', compact('laporanpinjams', 'redirect'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
  
    }
    public function printtanah()
    {
        $getRow = Pinjam::orderBy('id', 'DESC')->get();
        $row = Peminjaman::orderBy('id', 'DESC')->get()->count();
        $rowCount = $getRow->count();
        $pinjams=Pinjam::all();
        $pinjamans=Peminjaman::all();
        $pdf = PDF::loadview('laporanpinjams.tanah',compact('pinjams','rowCount','row','pinjamans'))->setPaper('A4','landscape');
        return $pdf->stream();
    }

    public function printalat()
    {
        $getRow = Pinjam::orderBy('id', 'DESC')->get();
        $pinjamans=Peminjaman::all();
        $pinjams=Pinjam::all();
        $pdf = PDF::loadview('laporanpinjams.alat',compact('pinjams','pinjamans'))->setPaper('A4','landscape');
        return $pdf->stream();
    }

    public function printroom()
    {
        $getRow = Pinjam::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        $pinjams=Pinjam::all();
        $pdf = PDF::loadview('laporanpinjams.room',compact('rowCount','pinjams'))->setPaper('A4','landscape');
        return $pdf->stream();
    }
}
