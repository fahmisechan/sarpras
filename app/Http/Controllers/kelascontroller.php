<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;

class kelascontroller extends Controller
{
    public function index(){
        $kelas = kelas::all();
        return view('kelas',['kelas' => $kelas]);
    }

    public function create(){
        return view('inputkelas');
    }

    public function store(Request $request)
    {
        kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'kapasitas_siswa' => $request->kapasitas_siswa
        ]);

        return redirect('kelas');
    }
    public function edit($id){
        $kelas = kelas::find($id);
        return view('kelas_edit', ['kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
         $kelas = kelas::find($id);
         $kelas->nama_kelas = $request->nama_kelas;
         $kelas->kapasitas_siswa = $request->kapasitas_siswa;
         $kelas->save();
         return redirect('kelas');
    }

    public function destroy($id)
    {
    $kelas = kelas::find($id);
    $kelas->delete();
    return redirect('kelas');
    }
}
