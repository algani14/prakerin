<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {


        $kecamatan = Kecamatan::with('kota')->get();
        return view('admin.kecamatan.index',compact('kecamatan'));
    }

   
    public function create()
    {
        $kota=Kota::all();
        return view('admin.kecamatan.create', compact('kota'));
    }

    
    public function store(Request $request)
    {
        $kecamatan = new Kecamatan();
        $kecamatan->id_kota =$request->id_kota;
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')
        ->with(['succes'=>'Data <b> ', $kecamatan->nama_kecamatan,
        '</b> berhasil di input']);
    }

   
    public function show( $id)
    {
        

        $kecamatan = Kota::findOrFail($id);
        $provinsi=Provinsi::all();
        return view ('admin.kota.show' , compact('kota' , 'provinsi'));
    }

    
    public function edit( $id)
    {

        $kecamatan = Kota::findOrfail($id);
        $provinsi = Provinsi::all();
        return view('admin.kota.edit',compact('provinsi' , 'kota'));
    }

    
    public function update(Request $request, $id)
    {
        $kecamatan = Kota::findOrfail($id);
        $kecamatan->id_provinsi = $request->id_provinsi;
        $kecamatan->kode_kota = $request->kode_kota;
        $kecamatan->nama_kota = $request->nama_kota;
        $kecamatan->save();
        return redirect()->route('kota.index')
        ->with(['succes'=>'Data <b> ', $kecamatan->nama_kota,
        '</b> berhasil di edit']);
    }

    
    public function destroy( $id)
    {
        $data = Kota::findOrFail($id);
        $data->delete();
        return redirect()->route('kota.index')->with
        (['message' =>'databerhasil dihapus']);;
    }
}
