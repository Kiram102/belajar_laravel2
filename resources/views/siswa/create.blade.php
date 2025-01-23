@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">NIS</label>
                            <input type="text" class="form-control" name="nis">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
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
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="XI RPL 1">XI RPL 1</option>
                                <option value="XI RPL 2">XI RPL 2</option>
                                <option value="XI RPL 3">XI RPL 3</option>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Cover</label>
                            <input type="file" class="form-control" name="cover" required>
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