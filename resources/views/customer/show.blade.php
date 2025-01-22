@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data {{$customer->id}}</div>
                <div class="card-body">
                <form action="{{ route('customer.update', ['customer' => $customer->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Customer</label>
                            <input type="text" class="form-control" name="nama" value="{{$customer->nama_customer}}" disabled>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="{{$customer->gender}}" checked disabled>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{$customer->gender}}
                                </label>
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{$customer->contact}}" disabled>
                            <br>
                        </div>
                        <a href="{{route('customer.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection