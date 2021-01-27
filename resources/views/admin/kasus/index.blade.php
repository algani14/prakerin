@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
            @include('flash-message')
                    <div class="card-header py-3">
                    <h10 class="m-0 font-weight-bold text-primary">
                        Data kasus
                        <a href=" {{route('kasus.create')}} " class="btn btn-primary" style="float: right;">Tambah Data</a>
                    </h10>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                    <th>Tanggal</th>
                                    <th>Rw</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kasus as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td> {{$item->positif}} </td>
                                        <td> {{$item->sembuh}} </td>
                                        <td> {{$item->meninggal}} </td>
                                        <td> {{$item->tanggal}} </td>
                                        <td> {{$item->rw->nama_rw}} </td>
                                        <td>
                                            <center>
                                                <form action="{{ route('kasus.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <a class="btn btn-success" href=" {{route('kasus.edit', $item->id)}} ">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-info" href=" {{route('kasus.show', $item->id)}} ">
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