@extends('layouts.app')
@section('title','Register')
@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card ">
                    <div class="card-body">
                        <form action="{{ route('PostRegister') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm your password" name="c_password">
                        </div>

                        <input type="submit" class="btn btn-primary my-3" value="Submit">

                        </form>
                    </div>
                </div>
        </div>
    </div>

</div>
@endsection
