@extends('template')
@section('content-name', 'Home Page')
@section('content')
<a href="{{route('product.create')}}" class="btn btn-success">Add Product</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>
            <img src="{{Storage::url($product->image)}}" alt="" srcset="" style="width: 80px;height:80px">
        </td>
        <td>{{$product->name}}</td>
        <td>{{$product->stock}}</td>
        <td>{{$product->price}}</td>
        <td>
            <form action="{{route('product.destroy', $product)}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{route('product.edit', $product)}}" class="btn btn-primary">Edit</a>
        </td>
      </tr>
      @empty
        <h1>
            No Product Found
        </h1>
      @endforelse
    </tbody>
  </table>
@endsection
