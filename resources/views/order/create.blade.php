@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Order</div>
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
                    <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Id Product</label>
                            <select name="id_product" id="" class="form-control">
                                @foreach($product as $data)
                                <option value="{{$data->id}}">{{$data->nama_product}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" name="Quantity">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Order Date</label>
                            <input type="date" class="form-control" name="date">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Id Customer</label>
                            <select name="id_customer" id="" class="form-control">
                                @foreach($customer as $data)
                                <option value="{{$data->id}}">{{$data->nama_customer}}</option>
                                @endforeach
                            </select>
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