@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah siswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('provinsi.update' , $provinsi->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Masukan Kode Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="{{$provinsi->kode_provinsi}}" name="kode_provinsi">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Masukan Nama Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="{{$provinsi->nama_provinsi}}" name="nama_provinsi">
                            </div>
                        </div>
                        <button class="btn-dark" type="submit">Simpan</button>
                        <button class="btn-danger" type="reset">Reset</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection