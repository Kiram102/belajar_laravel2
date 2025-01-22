@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data {{$order->id}}</div>
                <div class="card-body">
                <form action="{{ route('order.update', ['order' => $order->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>ID Customer : </label>
                            <select name="id_customer" class="form-select" disabled>
                                @foreach ($customer as $data)
                                    <option value="{{$data->id}}" {{$data->id == $order->id_customer ? 'selected' : '' }}>
                                        {{$data->nama_customer}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" name="Quantity" disabled value="{{$order->quantity}}">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Order Date</label>
                            <input type="date" class="form-control" name="date" disabled value="{{$order->order_date}}">
                            <br>
                        </div>
                        <div class="mb-3">
                            <label>ID Product : </label>
                            <select name="id_product" class="form-select" disabled>
                                @foreach ($product as $data)
                                    <option value="{{$data->id}}" {{$data->id == $order->id_product ? 'selected' : '' }}>
                                        {{$data->nama_product}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                      <a href="{{route('order.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection