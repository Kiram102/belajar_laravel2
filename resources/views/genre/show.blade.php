@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilan Data Genre</div>
                <div class="card-body">
                    <form action="{{ route('genre.update', ['genre' => $genre->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Gendre</label>
                            <input type="text" class="form-control" name="nama" value="{{$genre->genre}}" disabled>
                            <br>
                        </div>
                        <a href="{{route('genre.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection