@extends('Products.layouts')

@section('title', 'Modify')
@section('content')
<div class="container">
    <h1>MODIFY HERE</h1>

    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $er )
                    <li>{{$er}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    <form method="post" action="{{route('products.update', $products)}}">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="name" class="form-label">Name :</label>
            <input type="text" class="form-control" name="name" value="{{$products->name}}" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone :</label>
            <input type="text" class="form-control" name="phone" value="{{$products->phone}}" placeholder="Phone">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price :</label>
            <input type="number" class="form-control" name="price" value="{{$products->price}}" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <input type="text" class="form-control" name="description" value="{{$products->description}}" placeholder="Description">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
