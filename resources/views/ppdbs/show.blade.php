@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>
                <div class="card-body">
                    <form action="{{ route('ppdb.update', ['ppdb' => $ppdb->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Lengksp</label>
                            <input type="text" class="form-control" name="nama" value="{{$ppdb->nama_lengkap}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <br>
                             <input type="radio" name="jk" id="" value="Laki-Laki" disabled>
                             Laki-Laki
                             <input type="radio" name="jk" id="" value="Perempuan" disabled>
                             Perempuan
                            <br>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="form-control" name="agama" disabled>
                                <option value="Kristen">Kristen</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="90px" disabled>{{$ppdb->alamat}}</textarea>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Telopon</label>
                            <input type="number" class="form-control" name="telepon" value="{{$ppdb->telepon}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal" value="{{$ppdb->asal_sekolah}}" disabled>
                            <br>
                        </div>
                        <a href="{{route('ppdb.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection