@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Siswa</div>

                <div class="card-body">
                    @if (session('succes'))
                    <div class="alert alert-success alert-dismissible fate show" role="alert">
                        {{session('succes')}} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    @endif
                    </div>
              <a href="{{route('siswa.create')}}"  class="btn btn-outline-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($siswa as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->nis}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->kelas}}</td>
                                <td>
                                    <img src="{{asset('/images/siswa/'.$data->cover)}}" alt="" width="100">
                                </td>
                                <td>
                                <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-outline-success">Edit</a>
                                <a href="{{route('siswa.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                <form action="{{route('siswa.destroy',$data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn-outline-danger" type="submit" onclick="return confirm ('Apakah Anda Yakin')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection