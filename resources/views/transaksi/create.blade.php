@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Buku</div>
                <div class="card-body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
                    <form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Buku</label>
                            <select name="id_buk" id="" class="form-control">
                                @foreach($buku as $data)
                                <option value="{{$data->id}}">{{$data->nama_buku}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Pembeli</label>
                            <select name="id_pembel" id="" class="form-control">
                                @foreach($pembeli as $data)
                                <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection