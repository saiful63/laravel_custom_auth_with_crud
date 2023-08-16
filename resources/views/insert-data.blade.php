<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data</title>
    @include('bcdn')
</head>
<body>
<a class="btn btn-primary" href={{ '/' }}>Show Product</a>
<div class="container">
    <form action="{{ '/store_data' }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter product Name" value="{{ old('name') }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{ old('price') }}">
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <input type="submit" class="btn btn-primary my-3" value="Add">

    </form>
</div>
</body>
</html>
