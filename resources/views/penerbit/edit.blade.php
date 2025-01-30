@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Penerbit</div>
                <div class="card-body">
                @if ($errors->any())
    <div class="">
        
            @foreach ($errors->all() as $error)
            <div class="alert alert-success alert-dismissible fate show" role="alert">
                        {{$error}} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            @endforeach
        
    </div>
    
@endif
                    <form action="{{ route('penerbit.update', ['penerbit' => $penerbit->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Penerbit</label>
                            <input type="text" class="form-control" name="nama" value="{{$penerbit->nama_penerbit}}">
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