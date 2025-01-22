@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Product</div>
                <div class="card-body">
                <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Product</label>
                            <input type="text" class="form-control" name="nama" value="{{$product->nama_product}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" style="width: 25%;" value="{{$product->stock}}">
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