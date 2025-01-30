@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Buku</div>
                <div class="card-body">
                <form action="{{ route('buku.update', ['buku' => $buku->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" class="form-control" name="nama" value="{{$buku->nama_buku}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="harga"  value="{{$buku->harga}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stok"  value="{{$buku->stok}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">image</label>
                            <img src="{{asset('/images/buku/'.$buku->image)}}" alt="" width="100">
                            <br><br>
                            <input type="file" class="form-control" name="image" required disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Penerbit</label>
                            <select name="id_penerbi" id="" class="form-control" disabled >
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
                            <input type="date" class="form-control" name="tanggal" value="{{$buku->tanggal_terbit}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Genre</label>
                            <select name="id_genr" id="" class="form-control" disabled>
                                @foreach($genre as $data)
                                <option value="{{$data->id}}" {{$data->id == $buku->id_genre ? 'selected' : '' }}>
                                        {{$data->genre}}
                                    </option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <a href="{{route('buku.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection