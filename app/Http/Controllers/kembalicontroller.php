<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjam;
use Illuminate\Support\Facades\DB;
use app\User;
use Illuminate\Support\Facades\Auth;

class kembalicontroller extends Controller
{
   public function index()
   {
    $nama = Auth::user()->name;
    $pinjams = DB::table('pinjams')->where('nama_peminjam','=',$nama)->get();
    return view('barangpinjam',['pinjams' => $pinjams]);

    // $nama = Auth::user()->name;
    // $pinjam = pinjam::where('nama_peminjam',$nama);
    //     return view('barangpinjam',['pinjam' => $pinjam]);
   }
   public function destroy($id)
   {
    $pinjams = pinjam::find($id);
    $pinjams->delete();
    return redirect('kembali');
   }
}
