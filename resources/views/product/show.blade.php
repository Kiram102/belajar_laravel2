@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data {{$product->id}}</div>
                <div class="card-body">
                <form action="{{ route('product.update', ['product' => $product->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Product</label>
                            <input type="text" class="form-control" name="nama" value="{{$product->nama_product}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{$product->merk}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" style="width: 25%;" value="{{$product->stock}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Cover</label>
                            <img src="{{asset('/images/product/'.$product->cover)}}" alt="" width="100">
                            <br><br>
                        </div>
                        <a href="{{route('product.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection