@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Product</div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Product</label>
                            <input type="text" class="form-control" name="nama" value="">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" class="form-control" name="merk">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" style="width: 25%;">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Cover</label>
                            <input type="file" class="form-control" name="cover" required>
                            <br>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection