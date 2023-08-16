@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card ">
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary my-3" value="Login">

                        </form>
                    </div>
                </div>
        </div>
    </div>

</div>
@endsection
