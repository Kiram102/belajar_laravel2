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
 
                    <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" class="form-control" name="nama">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="harga">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stok">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Penerbit</label>
                            <select name="id_penerbi" id="" class="form-control">
                                @foreach($penerbit as $data)
                                <option value="{{$data->id}}">{{$data->nama_penerbit}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Genre</label>
                            <select name="id_genr" id="" class="form-control">
                                @foreach($genre as $data)
                                <option value="{{$data->id}}">{{$data->genre}}</option>
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