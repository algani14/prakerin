@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
            @include('flash-message')
                    <div class="card-header py-3">
                    <h10 class="m-0 font-weight-bold text-primary">
                        Data Kecamatan
                        <a href=" {{route('kecamatan.create')}} " class="btn btn-primary" style="float: right;">Tambah Data</a>
                    </10>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Kode Kecamatan</th>
                                    <th>Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kecamatan as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td> {{$item->nama_kecamatan}} </td>
                                        <td> {{$item->kode_kecamatan}} </td>
                                        <td> {{$item->kota->nama_kota}} </td>
                                        <td>
                                            <center>
                                                <form action="{{ route('kecamatan.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <a class="btn btn-success" href=" {{route('kecamatan.edit', $item->id)}} ">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-info" href=" {{route('kecamatan.show', $item->id)}} ">
                                                        Show
                                                    </a>  
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection