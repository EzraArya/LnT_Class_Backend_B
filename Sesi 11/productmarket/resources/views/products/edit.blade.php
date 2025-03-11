@extends('template')
@section('content-name', 'Edit Product')
@section('content')
<h1>Edit Product</h1>
<form action="{{route('product.update', $product)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="productName" class="form-label">
            Product Name
        </label>
        <input type="text" class="form-control" id="productName" name="name" value="{{$product->name}}">
        @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">
            Product Price
        </label>
        <input type="number" class="form-control" id="productPrice" name="price" value="{{$product->price}}">
        @error('price')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="productStock" class="form-label">
            Product Stock
        </label>
        <input type="number" class="form-control" id="productStock" name="stock" value="{{$product->stock}}">
        @error('stock')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="productImage" class="form-label">
            Product Image
        </label>
        <input type="file" class="form-control" id="productImage" name="image">
        @error('image')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
