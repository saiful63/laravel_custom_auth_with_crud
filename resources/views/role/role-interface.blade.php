@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ route('RoleCreate') }}" class="btn btn-primary">Create Role</a>

            {{-- <div class="form-check">
                <input  type="checkbox" class="form-check-input">
                <label class="form-check-label">
                    Role
                </label>
            </div> --}}
            <table class="table table-bordered">
                 <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role Type</th>
                        <th>Action</th>
                    </tr>
                 </thead>

                 <tbody>
                    @foreach($role as $value)

                        <tr>
                           <td>{{ $value['name'] }}</td>
                            <td>
                              @foreach( $value->permissions as $key => $user_role_type)
                                {{ $user_role_type['name'] }}
                                @if( $key != count($value->permissions)-1 )
                                ||
                                @endif
                              @endforeach
                            </td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    @endforeach
                 </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
