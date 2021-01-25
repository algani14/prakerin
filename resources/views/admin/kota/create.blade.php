@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                    <form action="{{route('kota.store')}}" method="post">
                        @csrf
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Pilih provinsi</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="id_provinsi" class="form-control">
                                     @foreach ($provinsi as $data)
                                    <option value="{{$data->id}}">{{$data->nama_provinsi}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Kode kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="kode_kota">
                            </div>
                        </div>
                        <div class = "row">
                            <div class="col-md-4">
                                <label for="">Nama kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nama_kota">
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