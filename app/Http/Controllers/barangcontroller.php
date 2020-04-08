<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kelas;

class barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('kelolabarang',['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('inputbarang',['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        barang::create([
            'nama_barang' => $request->nama_barang,
            'merek_barang' => $request->merek_barang,
            'harga_barang' => $request->harga_barang,
            'lokasi_barang' => $request->lokasi_barang,
            'qty' => $request->qty
        ]);

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = kelas::all();
        $barang = barang::find($id);
        return view('barangedit', ['barang' => $barang,'kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $barang = barang::find($id);
         $barang->nama_barang = $request->nama_barang;
         $barang->merek_barang = $request->merek_barang;
         $barang->harga_barang = $request->harga_barang;
         $barang->lokasi_barang = $request->lokasi_barang;
         $barang->qty = $request->qty;
         $barang->save();
         return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $barang = barang::find($id);
    $barang->delete();
    return redirect('barang');
    }
}
