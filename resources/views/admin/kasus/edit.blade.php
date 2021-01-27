@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action=" {{ route('kasus.update' ,$kasus->id) }} " method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        @csrf
                            <div class="form-group">
                                <label for="">Positif</label>
                                <input type="text" class="form-control" value="{{ $kasus->positif }}" name="positif" required>
                            </div>
                            <div class="form-group">
                                <label for="">Sembuh</label>
                                <input type="text" class="form-control" value="{{ $kasus->sembuh }}" name="sembuh" required>
                            </div>
                            <div class="form-group">
                                <label for="">Meninggal</label>
                                <input type="text" class="form-control" value="{{ $kasus->meninggal }}" name="meninggal" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" class="form-control" value="{{ $kasus->tanggal }}" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="">Rw</label>
                                <select class="form-control"  name="id_rw" id="">
                                    @foreach ($rw as $item)
                                        <option value=" {{$item->id}} "> {{$item->nama_rw}} </option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <button class="btn btn-primary"  type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection