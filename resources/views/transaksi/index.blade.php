@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="width: 100%;right: 10px;">
                <div class="card-header">Data Transaksi</div>

                <div class="card-body">
                    <a href="{{route('transaksi.create')}}" class="btn btn-outline-primary" style="width: 100px;">Add</a>
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
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Id Buku</th>
                                <th scope="col">Id Pembeli</th>
                                <th scope="col">Edit</th>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->jumlah}}</td>
                                <td>{{$data->tanggal_transaksi}}</td>
                                <td>{{$data->Buku->nama_buku}}</td>
                                <td>{{$data->Pembeli->nama_pembeli}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                    
                                        <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        <a href="{{route('transaksi.edit',$data->id)}}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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