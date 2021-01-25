@extends('layouts.master')
@section('konten')
<div class='container-fluid'>
    <div class='row'>
        <div class=col-md-12>
            <div class='card'>
                <div class='card-header'>
                    Data Provinsi
                    <a href="{{route('provinsi.create')}}"
                     class='btn btn-primary float-right'>
                        Tambah
                    </a>
                </div>
                <div class='card-body'>
                    <div class='table-responsice'>
                        <table class='table'>
                            <tr>
                                <th>No</th>
                                <th>Kode Provinsi</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            <tr>
                                @php $no=1; @endphp
                                @foreach($provinsi as $data)
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_provinsi}}</td>
                                <td>{{$data->nama_provinsi}}</td>
                                <td>
                            <form action="{{route('provinsi.destroy' , $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href=" {{route('provinsi.show' , $data->id) }} ">show</a>
                                <a class=" btn btn-warning" href=" {{route('provinsi.edit' , $data->id) }}">edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                                </td>
                            </tr>
                            @endforeach    
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection