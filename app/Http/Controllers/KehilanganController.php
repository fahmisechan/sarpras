<?php

namespace App\Http\Controllers;

use App\Kehilangan;
use App\barang;
use Illuminate\Http\Request;

class KehilanganController extends Controller
{
    public function index()
    {
    	$barang = barang::all();
    	return view('kehilangan.index',compact(['barang']));
    }
    public function create(Request $request)
    {
    	Kehilangan::create($request->all());
    	return redirect('posthilang');
    }
    public function posthilang()
    {
     	return view('kehilangan.posthilang');
    }
    public function kehilangan()
    {
        $kehilangan = Kehilangan::all();
        $barang = Barang::all();
        return view('kehilangan.kehilangan',compact(['kehilangan','barang']));
    }
    public function delete($id)
    {
       $kehilangan = Kehilangan::find($id);
       $kehilangan->delete();
       return redirect('kehilangan');
    }
}
