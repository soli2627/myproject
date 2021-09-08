@extends('layout')
@section('content')
<div class="container">
    <div class="row m-5 ">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Resturant</div>
                </div>
                <div class="card-body">
                    <!-- get the error msg on form submit---->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form method="POST" action="{{ route('restu.update')}}" enctype="multipart/form-data">
                        @csrf
                        @foreach ($restu as $item) 
                            <div class="form-group">
                                <input type="hidden" value="{{$item->id}}" name="id">
                            <label for="restuName">Resturant Name</label>
                            <input type="text" class="form-control" value="{{$item->name}}" name="name" id="name" placeholder="demo">
                            </div>

                            <div class="form-group">
                                <label for="restuEmail">Resturant Email</label>
                                <input type="email" class="form-control" value="{{$item->email}}" name="email" id="email" placeholder="demo">
                            </div> 

                            <div class="form-group">
                                <label for="restuAddress">Resturant Address</label>
                                <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="Full Address"> {{$item->address}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="restuProfile">Resturant Profile</label>
                                <input type="file" class="form-control" name="profile" id="" value="{{$item->profile}}">
                            </div>
                            <div class="form-group">
                            <button class="btn btn-secondary" type="submit">Submit</button>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection