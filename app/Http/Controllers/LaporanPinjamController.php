<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanPinjam;

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
}
