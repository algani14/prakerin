@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Kota</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">pilih nama provinsi</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$kota->provinsi->nama_provinsi}}" readonly name="id_provinsi">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for=""> Kode Kota</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$kota->kode_kota}}" readonly name="kode_kota">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Nama Kota</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$kota->nama_kota}}" readonly name="nama_kota">
                        </div>
                        <div class ='from-group'>
                        <a href="{{ route('provinsi.index') }}" class='btn btn-danger'></a>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection