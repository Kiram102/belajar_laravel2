@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Telepon</div>
                <div class="card-body">
                    <form action="{{route('telepon.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor</label>
                            <input type="text" class="form-control" name="nomor">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Pengguna</label>
                            <select name="id_pengguna" id="" class="form-control">
                                @foreach($pengguna as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
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