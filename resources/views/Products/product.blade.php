@extends('Products.layouts')

@section('title', "Product")
@section('content')
<h1>Product : </h1>

<a href="/product/create" class="btn btn-primary m-2">Add Product</a>
@if (session()->has('successUpdate'))
    <div class="alert alert-success" role="alert">
        {{ session('successUpdate') }}
    </div>

@elseif(session()->has('successAdded'))
    <div class="alert alert-success" role="alert">
        {{ session('successAdded') }}
    </div>

@elseif(session()->has('successDelete'))
    <div class="alert alert-success" role="alert">
        {{ session('successDelete') }}
    </div>
@endif


@if (count($products) > 0)
<table class="table table-dark m-5 p-5">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name }}</td>
            <td>{{$product->phone }}</td>
            <td>{{$product->price }}</td>
            <td>{{$product->description }}</td>
            <td>
                <a href="{{route("products.modify", $product)}}" class="btn btn-sm btn-success">Modify</a>
             </td>
             <td>  
                <form method="post" action="{{route('products.delete', $product)}}">
                    @csrf
                    @method('delete')
                    <input type="submit" onclick="confirm('Sure you want to delete?')" value="Delete" class="btn btn-sm btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h4 class="alert alert-danger">No data is in the table !!</h4>
@endif
@endsection

