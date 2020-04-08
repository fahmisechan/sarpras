<?php

namespace App\Http\Controllers;

use App\Kerusakan;
use App\kelas;
use App\barang;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    public function kerusakan()
    {
    	$kerusakan = Kerusakan::all();
    	$kelas = Kelas::all();
    	$barang = Barang::all();
    	return view('kerusakan.kerusakan',compact(['kerusakan','kelas','barang']));
    }
    public function create(Request $request)
    {
    	Kerusakan::create($request->all());
    	return redirect('postrusak');
    }
    public function index()
    {
        $kerusakan = Kerusakan::all();
        $kelas = Kelas::all();
        $barang = Barang::all();
        return view('kerusakan.index',compact(['kerusakan','kelas','barang']));
    }
    public function postrusak()
    {
       return view('kerusakan.postrusak');
    }
    public function delete($id)
    {
        $kerusakan = Kerusakan::find($id);
        $kerusakan->delete();
        return redirect('kerusakan');
    }
}
