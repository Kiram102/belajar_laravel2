@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.update', $siswa->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">NIS</label>
                            <input type="text" class="form-control" name="nis" value="{{$siswa->nis}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">
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
                        <td>
                        <label for="">cover</label>
                            <img src="{{asset('/images/siswa/'.$siswa->cover)}}" alt="" width="100">
                            <input type="file" class="form-control" name="cover">
                        </td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection