@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku</div>
                <div class="card-body">
                <form action="{{ route('buku.update', ['buku' => $buku->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" class="form-control" name="nama" value="{{$buku->nama_buku}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="harga"  value="{{$buku->harga}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stok"  value="{{$buku->stok}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Cover</label>
                            <img src="{{asset('/images/buku/'.$buku->image)}}" alt="" width="100">
                            <br><br>
                            <input type="file" class="form-control" name="image" required>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Penerbit</label>
                            <select name="id_penerbi" id="" class="form-control">
                                @foreach($penerbit as $data)
                                <option value="{{$data->id}}" {{$data->id == $buku->id_penerbit ? 'selected' : '' }}>
                                        {{$data->nama_penerbit}}
                                    </option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal" value="{{$buku->tanggal_terbit}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Genre</label>
                            <select name="id_genr" id="" class="form-control">
                                @foreach($genre as $data)
                                <option value="{{$data->id}}" {{$data->id == $buku->id_genre ? 'selected' : '' }}>
                                        {{$data->genre}}
                                    </option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection