@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h10 class="m-0 font-weight-bold text-primary">
                        Data Desa
                        <a href=" {{route('desa.create')}} " class="btn btn-primary" style="float: right;">Tambah Data</a>
                    </h10>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama desa</th>
                                    <th>Kecamatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($desa as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td> {{$item->nama_desa}} </td>
                                        <td> {{$item->kecamatan->nama_kecamatan}} </td>
                                        <td>
                                            <center>
                                                <form action="{{ route('desa.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <a class="btn btn-success" href=" {{route('desa.edit', $item->id)}} ">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-primary" href=" {{route('desa.show', $item->id)}} ">
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