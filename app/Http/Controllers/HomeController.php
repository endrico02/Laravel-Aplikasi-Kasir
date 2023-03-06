<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::user()->role == 'Administrator'){
            return view('admin/dashboard');
        }
    }
    public function transaksi(){
        return view('admin/transaksi');
    }
    public function laporan_penjualan(){
        return view('admin/laporan_penjualan');
    }
}
