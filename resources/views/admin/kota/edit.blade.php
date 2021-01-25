@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Provinsi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('kota.update' , $kota->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">pilih provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="id_provinsi" class="form-control">
                                     @foreach ($provinsi as $data)
                                    <option value="{{$data->id}}"
                                        {{$data->id == $kota->id_provinsi ? 'selected' : ''}}>{{$data->nama_provinsi}}
                                       </option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Masukan Kode Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="{{$kota->kode_kota}}" name="kode_kota">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Masukan Nama Provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="{{$kota->nama_kota}}" name="nama_kota">
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