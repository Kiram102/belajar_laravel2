@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="width: 80%;left: 80px;">
                <div class="card-header">Data Order</div>

                <div class="card-body">
                    <a href="{{route('order.create')}}" class="btn btn-primary" style="width: 100px;">Add</a>
                    @if (session('succes'))
                    <div class="alert alert-success alert-dismissible fate show" role="alert">
                        {{session('succes')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        @endif
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Id Customer</th>
                                <th scope="col">Edit</th>
                        </thead>
                        <tbody>
                            @php $no = 1;@endphp
                            @foreach($order as $data)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->Product->nama_product}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$data->order_date}}</td>
                                <td>{{$data->Customer->nama_customer}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <form action="{{route('order.destroy',$data->id)}}" method="post">
                                            <a href="{{route('order.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{route('order.show',$data->id)}}" class="btn btn-warning">Show</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm ('Apakah Anda Yakin')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection