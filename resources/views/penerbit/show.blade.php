@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.update', ['penerbit' => $penerbit->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Penerbit</label>
                            <input type="text" class="form-control" name="nama" value="{{$penerbit->nama_penerbit}}" disabled>
                            <br>
                        </div>
                        <a href="{{route('penerbit.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection