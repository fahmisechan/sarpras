<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjam;
use App\barang;

class pinjamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = pinjam::all();
        return view('lihatpinjam',['pinjam' => $pinjam]);
    }

    public function pilih()
    {
        $barang = barang::all();
        return view('pinjam',['barang' => $barang]);
    }

    public function selected($id)
    {
        $barang = barang::find($id);
        return view('pinjamselected', ['barang' => $barang]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pinjam::create([
            'nama_barang' => $request->nama_barang,
            'id_barang' => $request->id_barang,
            'merek_barang' => $request->merek_barang,
            'nama_peminjam' => $request->nama_peminjam,
            'nis_peminjam' => $request->nis_peminjam,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
