<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" crossorigin="anonymous">
    <!-- Add Toastr css ---->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <title>Restaurant</title>
</head>
<body>
    <header><nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Resturant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
                  <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('restu.about') }}">About</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('restu.list') }}">List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('restu.create') }}">Add</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('restu.search')}}">Search</a>
                  </li>
                 @if (session()->has('email'))
                    <li class="nav-item"> 
                      <a class="nav-link" href="{{ route('users.logout')}}">Logout</a> 
                    </li>
                    @else 
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('users.register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('users.login')}}">Login</a>
                    </li>
                  @endif
                    
          </ul>
        </div>
      </nav>
    </header>
    
    @yield('content')

    {{-- <footer>copyright @2021 by restuurant</footer> --}}
    <!--- Add Toastr Package script--->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>
</html>