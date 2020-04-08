<?php

namespace App\Http\Controllers;
use App\kelas;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class lokasicontroller extends Controller
{
    public function index(){
        $kelas = kelas::all();
        return view('lokasi',['kelas' => $kelas]);
    }
    public function bahasainggris(){
        $kelas = DB::table('kelas')
        ->join('barangs','kelas.nama_kelas','=','barangs.lokasi_barang')
        ->where('kelas.id' ,'=',1)
        ->get();
        return view('barangdilokasi',['kelas' => $kelas]);

    }
    public function cek($id){
    $kelas = DB::table('kelas')->where('kelas.id',$id)
    ->join('barangs', 'kelas.nama_kelas', '=', 'barangs.lokasi_barang')
    ->select('nama_kelas','nama_barang','merek_barang','harga_barang','qty')
    ->get();
    return view('barangdilokasi', ['kelas' => $kelas]);
    }
}
