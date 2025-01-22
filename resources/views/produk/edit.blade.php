@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Produk</div>
                <div class="card-body">
                    <form action="{{ route('produk.update', ['produk' => $produk->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" value="{{$produk->nama_produk}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Produk</label>
                            <select name="id_produk" id="" class="form-control">
                                @foreach($kategori as $data)
                                <option value="{{$data->id}}" {{$data->id == $produk->id_kategori ?  'selected' : '' }}> {{$data->nama_kategori}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" class="form-control" name="stok" style="width: 20%;" value="{{$produk->stok}}">
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