@extends('layout')
<style>
    .w-5{
        display: none;
    }
</style>
@section('content')
<div class="container">  
        <div class="row m-5">
            <div class="col">
                <h2 class="text-center">Restaurants List</h2>
            </div>
        </div>
        <div class="row"> 
            @if (count($data) > 0)
            @foreach ($data as $item)
                
 
            <div class="col-sm-3 p-3">
                <div class="card"> 
                    <img class="card-img-top" src="{{ asset('/images')}}/{{$item->profile}}" alt="Card image cap" height="150px" width="150px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name}}</h5>
                        <p class="card-text">{{ $item->address}}.</p>
                        <a href="#" class="btn btn-secondary">Order Now</a> 
                        <a href="/delete/{{$item->id}}"><i class="fas fa-trash  text-dark p-2" style="font-size: 25px;"></i></a>
                        <a href="/edit/{{$item->id}}"><i class="fas fa-edit text-dark p-2" style="font-size: 25px;"></i></a>
                        
                    </div>
                </div>
            </div>
            @endforeach
            <span class="p-5">{{$data->links()}}</span>
            @else
            <div class="col-sm-12"> 
                <div class="card"> 
                        <h5 class="card-body text-center bg-danger text-white">Opps Restaurant is not avaiable </h5>  
                </div>
                
            </div> 
            @endif 
       </div>
</div>
@endsection