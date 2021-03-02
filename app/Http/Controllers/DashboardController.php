<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barang;



class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::all()->count();
        $barang = Barang::all()->count();
        return view('dashboard', compact('jumlah_user','barang'));
    }

}
