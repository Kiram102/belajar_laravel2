@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Transaksi</div>
                <div class="card-body">
                <form action="{{ route('transaksi.update', ['transaksi' => $transaksi->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{$transaksi->jumlah}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal" value="{{$transaksi->tanggal_transaksi}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Buku</label>
                            <select name="id_buk" id="" class="form-control" disabled>
                                @foreach($buku as $data)
                                <option value="{{$data->id}}" {{$data->id == $transaksi->id_buku ? 'selected' : '' }}>
                                {{$data->nama_buku}}
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Pembeli</label>
                            <select name="id_pembel" id="" class="form-control" disabled>
                                @foreach($pembeli as $data)
                                <option value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : '' }}>
                                {{$data->nama_pembeli}}
                                @endforeach
                            </select>
                            <br>
                        </div>
                      
                        <a href="{{route('transaksi.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection