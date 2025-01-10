@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                <a href="{{route('ppdb.create')}}"  class="btn btn-outline-primary" style="width: 100px;">Add</a>
                    @if (session('succes'))
                    <div class="alert alert-success alert-dismissible fate show" role="alert">
                        {{session('succes')}} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    @endif
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($ppdb as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nama_lengkap}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->agama}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->telepon}}</td>
                                <td>{{$data->asal_sekolah}}</td>
                                <td>
                                <a href="{{route('ppdb.edit',$data->id)}}" class="btn btn-outline-success">Edit</a>
                                <a href="{{route('ppdb.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                <form action="{{route('ppdb.destroy',$data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                               <button class="btn btn-outline-danger" type="submit" onclick="return confirm ('Apakah Anda Yakin')">Delete</button>
                                </form>
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
@endsection