@extends('layouts.master')
@section('konten')
<div class='container-fluid'>
    <div class='row'>
        <div class=col-md-12>
            <div class='card'>
                <div class='card-header'>
                    Data kota
                    <a href="{{route('kota.create')}}"
                     class='btn btn-primary float-right'>
                        Tambah
                    </a>
                </div>
                <div class='card-body'>
                    <div class='table-responsice'>
                        <table class='table'>
                            <tr>
                                <th>No</th>
                                <th>Kode Kota</th>
                                <th>Kota</th>
                                <th>Aksi</th>
                            <tr>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                               
                                <td>{{$data->kode_kota}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>
                            <form action="{{route('kota.destroy' , $data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href=" {{route('kota.show' , $data->id) }} ">show</a>
                                <a class=" btn btn-warning" href=" {{route('kota.edit' , $data->id) }}">edit</a>
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