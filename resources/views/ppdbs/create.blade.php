@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>
                <div class="card-body">
                    <form action="{{route('ppdb.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Lengksp</label>
                            <input type="text" class="form-control" name="nama">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <br>
                             <input type="radio" name="jk" id="" value="Laki-Laki">
                             Laki-Laki
                             <input type="radio" name="jk" id="" value="Perempuan">
                             Perempuan
                            <br>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Kristen">Kristen</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="90px"></textarea>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Telopon</label>
                            <input type="number" class="form-control" name="telepon">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal">
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