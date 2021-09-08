@extends('layout')
@section('content')

    <div class="container">
        <div class="row m-5 ">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Resturant</div>
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
                        <form method="POST" action="{{ route('restu.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="restuName">Resturant Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="demo">
                            </div>

                            <div class="form-group">
                                <label for="restuEmail">Resturant Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="demo">
                            </div> 

                            <div class="form-group">
                                <label for="restuAddress">Resturant Address</label>
                                <textarea name="address" class="form-control" id="address" cols="30" rows="5" placeholder="Full Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="restuProfile">Resturant Profile</label>
                                <input type="file" class="form-control" name="profile" id="">
                            </div>
                            <div class="form-group">
                              <button class="btn btn-secondary" type="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection