@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="width: 85%;left: 70px;">
                <div class="card-header">Data Produk</div>

                <div class="card-body">
                    <a href="{{route('produk.create')}}" class="btn btn-primary" style="width: 100px;">Add</a>
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
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Id Kategori</th>
                                <th scope="col">Edit</th>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($produk as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nama_produk}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->stok}}</td>
                                <td>{{$data->kategoris->nama_kategori}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <form action="{{route('produk.destroy',$data->id)}}" method="post">
                                            <a href="{{route('produk.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('produk.show',$data->id)}}" class="btn btn-warning">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm ('Apakah Anda Yakin')">Delete</button>
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