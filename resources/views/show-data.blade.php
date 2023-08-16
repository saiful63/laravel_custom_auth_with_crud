@extends('layouts.app')

@section('content')
 {{-- <div class="alert alert-success">

    </div> --}}
<div class="container">
    <a class="btn btn-primary" href={{ '/insertion_interface' }}>Add Product</a>
    @if(Session::has('msg'))

    <h4 class="alert alert-success">{{ Session::get('msg') }}</h4>
    @endif
    <h1>{{ Auth::user()->name }}</h1>
 <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($show_product as $key => $value)
            <tr>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['price'] }}</td>
                <td>
                    <a href="{{ '/edit_data/'.$value['id'] }}" class="btn btn-primary">Edit</a>
                    <a href="{{ '/delete_data/'.$value['id'] }}" class="btn btn-danger" onclick="confirm('Do you wnat to delete?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $show_product->links() }}

</div>

@endsection

