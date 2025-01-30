@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Pembeli</div>
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
                        <form action="{{route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input type="text" class="form-control" name="nama">
                                <br>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="flexRadioDefault1" value="Laki-Laki" >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="kelamin" id="flexRadioDefault2" checked value="Perempuan">
                                <label class="form-check-label" for="flexRadioDefault2">
                                   Perempuan
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="number" class="form-control" name="telepon">
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