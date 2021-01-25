@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                    <form action="{{route('kecamatan.store')}}" method="post">
                        @csrf
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Pilih Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="id_kota" class="form-control">
                                     @foreach ($kota as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Kode kecamatan</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="kode_kecamatan">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Nama kecamatan</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nama_kecamatan">
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