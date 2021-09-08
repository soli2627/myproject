@extends('layout')
@section('content')
    <div class="container">
        <div class="row m-5">
            <div class="col-md-12">
                @foreach ($userData as $item)  
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 ">
                                   <div class="text-center">
                                    <img src="{{asset('/users')}}/{{$item->profile}}" alt="User Image">
                                   </div>
                                </div>
                                <div class="col-md-6 pt-4">
                                   <p><b><i class="fas fa-user"></i></b> : {{$item->name}}</p>
                                   <p><b><i class="fas fa-envelope-open-text"></i></b> : <a href="mailto:{{$item->email}}">{{$item->email}}</a></p>
                                   <p><b><i class="fas fa-phone-square"></i></b> :<a href="tel:{{$item->phone}}">{{$item->phone}}</a> </p>
                                   <p><b><i class="fas fa-map-marker-alt"></i></b> : {{$item->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
@endsection