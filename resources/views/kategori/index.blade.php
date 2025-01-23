@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="width: 65%;left: 150px;">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                    <a href="{{route('kategori.create')}}" class="btn btn-outline-primary" style="width: 100px;">Add</a>
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
                                <th scope="col">Nama</th>
                                <th scope="col">Edit</th>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($kategori as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nama_kategori}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                    
                                        <form action="{{route('kategori.destroy',$data->id)}}" method="post">
                                        <a href="{{route('kategori.edit',$data->id)}}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{route('kategori.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm ('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </div>
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