@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 my-5 bg-white p-3">
        <h3>Select User to assign Role</h3>
        <form action="" method="post">
            <div class="form-group">
             <select class="form-select">
                <option selected>Select User</option>
                @foreach($user as $sel_user)
                <option value="{{ $sel_user['id'] }}">{{ $sel_user['name'] }}</option>
                @endforeach
              </select>
            </div>


            <div class="form-group">
             <select class="form-select">
                <option selected>Select Role</option>
                @foreach($role as $sel_role)
                <option value="{{ $sel_user['id'] }}">{{ $sel_role['name'] }}</option>
                @endforeach
              </select>
            </div>
        </form>

        <input type="submit" class="btn btn-primary my-3" value="Assign User">
        </div>
    </div>
</div>

@endsection
