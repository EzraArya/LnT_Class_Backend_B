@extends('template')
@section('titlePage', 'Home')
@section('content')
<a href="{{route('product.create')}}">
    <button type="button" class="btn btn-success">
        Add Product
    </button>
</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>
            <img src="{{Storage::url($product->image)}}" alt="" srcset="" style="width:100px;height:100px">
        </td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}}</td>
        <td>
            <form action="{{route('product.destroy', $product->id)}}" method="post" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">Edit</a>
        </td>
      </tr>
    @empty
        <h1>Empty Array</h1>
      @endforelse
    </tbody>
  </table>
@endsection
