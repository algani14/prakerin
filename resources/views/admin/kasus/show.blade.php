@extends('layouts.master')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Show Data Kasus
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input type="text" name="nama_provinsi" value="{{$kasus->rw->desa->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">kota</label>
                                <input type="text" name="nama_kota" value="{{$kasus->rw->desa->kecamatan->kota->nama_kota}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">kecamatan</label>
                                <input type="text" name="nama_kecamatan" value="{{$kasus->rw->desa->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">desa</label>
                                <input type="text" name="nama_desa" value="{{$kasus->rw->desa->nama_desa}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">positif</label>
                                <input type="text"  value="{{$kasus->positif}}" class="form-control" name="positif" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">meninggal</label>
                                <input type="text"  value="{{$kasus->meninggal}}" class="form-control" name="meninggal" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">tanggal</label>
                                <input type="date"  value="{{$kasus->tanggal}}" class="form-control" name="tanggal" readonly>
                            </div>
                            <div class="form-group">
                                <a href=" {{ route('kasus.index') }} " class="btn btn-danger">Back</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection