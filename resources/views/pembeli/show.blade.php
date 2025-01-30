@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Pembeli</div>
                <div class="card-body">
                <form action="{{ route('pembeli.update', ['pembeli' => $pembeli->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama" value="{{$pembeli->nama_pembeli}}" disabled>
                                <br>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="flexRadioDefault1" value="Laki-Laki" disabled {{ $pembeli->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }} >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="flexRadioDefault2"  value="Perempuan" disabled {{ $pembeli->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                   Perempuan
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="number" class="form-control" name="telepon" value="{{$pembeli->telepon}}" disabled>
                                <br>
                            </div>
                            <a href="{{route('pembeli.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection