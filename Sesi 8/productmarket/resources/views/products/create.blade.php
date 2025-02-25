@extends('template')
@section('content-name', 'Add Product')
@section('content')
<form action="{{route('product.store')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="productName" class="form-label">
            Product Name
        </label>
        <input type="text" class="form-control" id="productName" name="name">
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">
            Product Price
        </label>
        <input type="number" class="form-control" id="productPrice" name="price">
    </div>
    <div class="mb-3">
        <label for="productStock" class="form-label">
            Product Stock
        </label>
        <input type="number" class="form-control" id="productStock" name="stock">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <h1>{{$error}}</h1>
    @endforeach
  @endif
@endsection
