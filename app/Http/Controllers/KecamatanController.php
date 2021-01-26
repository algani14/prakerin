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
        

        $kecamatan = Kecamatan::findOrFail($id);
        $kota=Kota::all();
        return view ('admin.kecamatan.show' , compact('kota' , 'kecamatan'));
    }

    
    public function edit( $id)
    {

        $kecamatan = Kecamatan::findOrFail($id);
        $kota = Kota::all();
        return view('admin.kecamatan.edit', compact('kecamatan', 'kota'));
    
    }

    
    public function update(Request $request, $id)
    {
        $kecamatan = kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message' => 'Data berhasil ditambah']);
    }

    
    public function destroy( $id)
    {
        $data = Kecamatan::findOrFail($id);
        $data->delete();
        return redirect()->route('kecamatan.index')->with
        (['message' =>'databerhasil dihapus']);;
    }
}
