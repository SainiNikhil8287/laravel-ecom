@extends('layouts.main')

@section('content')

 <form action="{{url('/')}}/register" method="post">
    @csrf
    <div class="form-group mt-3">
        <label>Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>


    <div class="form-group mt-3">
        <label>Password</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password">
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mt-3">
        <label>Confirm Password</label>
        <input type="text" name="password_confirmation" id="pass_conf" class="form-control" placeholder="Enter Password Again">
        @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection