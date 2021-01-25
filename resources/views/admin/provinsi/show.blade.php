@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">show provinsi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class = "row">
                            <div class="col-md-4">
                                <label for=""> Kode Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$provinsi->kode_provinsi}}" readonly name="kode_provinsi">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Nama Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$provinsi->nama_provinsi}}" readonly name="nama_provinsi">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection