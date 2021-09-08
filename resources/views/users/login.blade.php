@extends('layout')
@section('content')
<div class="container p-5">
    <div class="row">
          <div class="col-md-12">
              <h2 class="text-center">User Sign Up Page !</h2> 
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
      <div class="col-md-2"></div>
      <div class=" col-md-6 justify-content-center ml-5">
          <div class="card">
              <div class="card-header text-center text-white bg-info">User sign in !!</div>
              <div class="card-body">
                <form action="{{ route('users.user-login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control"  name="email" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
      <div class="col-md-2"></div>
  </div> 
</div>
@endsection