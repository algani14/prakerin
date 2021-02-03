<?php

namespace App\Http\Controllers\API;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kasus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class ApiController extends Controller
{
    
    public function provinsi()
    {
        $provinsi = DB::table('provinsis')
          ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
          DB::raw('SUM(kasuses.reaktif) as Reaktif'),
          DB::raw('SUM(kasuses.positif) as Positif'),
          DB::raw('SUM(kasuses.sembuh) as Sembuh'),
          DB::raw('SUM(kasuses.meninggal) as Meninggal'))
              ->join('kotas','provinsis.id','=','kotas.id_provinsi')
              ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
              ->join('desas','kecamatans.id','=','desas.id_kecamatan')
              ->join('rws','desas.id','=','rws.id_desa')
              ->join('kasuses','rws.id','=','kasuses.id_rw')
          ->groupBy('provinsis.id')->get();
       
          $positif = DB::table('rws')->select('kasuses.positif','kasuses.reaktif'.'kasuses.sembuh','kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $reaktif = DB::table('rws')->select('kasuses.positif','kasuses.reaktif'.'kasuses.sembuh','kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
            $sembuh = DB::table('rws')->select('kasuses.positif','kasuses.reaktif'.'kasuses.sembuh','kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.positif','kasuses.reaktif'.'kasuses.sembuh','kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $provinsi
                        ],
            'Total' =>[
                        'Jumlah Reaktif' => $reaktif,
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
        ]);

    }

    public function provinsixkota(Type $var = null)
    {
      
    }


    public function positif()
    {
      $positif = DB::table('kasuses')
          ->select('kasuses.positif')
          ->sum ('kasuses.positif');
          
        return response([
            'success' => true,
            'data' => ['name' => 'total positif',
            'value' => $positif,
                    ],       
            'message' => 'Berhasil'
        ], 200);
    }      
      
    public function sembuh()
    {
      $sembuh = DB::table('kasuses')
          ->select('kasuses.sembuh')
          ->sum ('kasuses.sembuh');
          
          return response([
            'success' => true,
            'data' => ['name' => 'total sembuh',
            'value' => $sembuh,
                    ],       
            'message' => 'Berhasil'
        ], 200);
    }
    
    public function meninggal()
    {
      $meninggal = DB::table('kasuses')
          ->select('kasuses.meninggal')
          ->sum ('kasuses.meninggal');
          
          return response([
            'success' => true,
            'data' => ['name' => 'total meninggal',
            'value' => $meninggal,
                    ],       
            'message' => 'Berhasil'
        ], 200);
    }
    public function indonesia()
    {
      $meninggal = DB::table('kasuses')
          ->select('kasuses.positif')
          ->sum ('kasuses.positif');

      $sembuh = DB::table('kasuses')    
          ->select('kasuses.sembuh')
          ->sum ('kasuses.sembuh');
      
      $meninggal = DB::table('kasuses')    
          ->select('kasuses.meninggal')
          ->sum ('kasuses.meninggal');    
          
          
           $this->data=[
            'nama' => 'indonesia',
            'positif' => $positif,
            'sembuh' => $sembuh,
            'meninggal' => $meninggal,
          ];
    }
}
  


      



          // $this->data=[
          //   'nama' => 'indonesia',
          //   'positif' => $positif,
          //   'sembuh' => $sembuh,
          //   'meninggal' => $meninggal,
          // ];




