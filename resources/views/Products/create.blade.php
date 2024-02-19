@extends('Products.layouts')

@section('title', 'Create')
@section('content')
<div class="container">
    <h1>Create page : </h1>

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

    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method("post")
        <div class="mb-3">
            <label for="name" class="form-label">Name :</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone :</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price :</label>
            <input type="number" class="form-control" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <input type="text" class="form-control" name="description" placeholder="Description">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
