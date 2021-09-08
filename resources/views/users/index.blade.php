@extends('layout')
@section('content')
    
<div class="container p-5">
      <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-success">User Sign Up Page !</h2>
            </div>
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <div class="row p-4">
        <div class="col-md-12 justify-content-*-center">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row m-3">
                <div class="col">
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Enter Phone number" name="phone">
                </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="col">
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                     <textarea name="address" id="address" cols="30" rows="5" class="form-control"></textarea>
                    </div> 
                </div>
                <div class="row m-3">
                    <div class="col">
                        <label for="proflie ">Photo</label>
                    <input type="file" class="form-control" name="profile">
                    </div> 
                </div>
               <div class="text-center">
                <button type="submit" class="btn btn-secondary ">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>

@endsection