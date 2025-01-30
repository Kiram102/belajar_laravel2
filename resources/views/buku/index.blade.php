@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="width: 120%;right: 90px;">
                <div class="card-header">Data Buku</div>

                <div class="card-body">
                    <a href="{{route('buku.create')}}" class="btn btn-outline-primary" style="width: 100px;">Add</a>
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
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Image</th>
                                <th scope="col">Id Penerbit</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Id Genre</th>
                                <th scope="col">Edit</th>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($buku as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nama_buku}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->stok}}</td>
                                <td>
                                    <img src="{{asset('/images/buku/'.$data->image)}}" alt="" width="100">
                                </td>
                                <td>{{$data->Penerbit->nama_penerbit}}</td>
                                <td>{{$data->tanggal_terbit}}</td>
                                <td>{{$data->Genre->genre}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                    
                                        <form action="{{route('buku.destroy',$data->id)}}" method="post">
                                        <a href="{{route('buku.edit',$data->id)}}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{route('buku.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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