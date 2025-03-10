@extends('template')
@section('titlePage', 'create product')
@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <h1>Create Product</h1>
    <div class="mb-3">
      <label for="productName" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="productName" name="name">
    </div>
    <div class="mb-3">
        <label for="productStock" class="form-label">Product Stock</label>
        <input type="number" class="form-control" id="productStock" name="stock">
      </div>
      <div class="mb-3">
        <label for="productPrice" class="form-label">Product Price</label>
        <input type="number" class="form-control" id="productPrice" name="price">
      </div>
      <div class="mb-3">
        <label for="productImage" class="form-label">Product Image</label>
        <input type="file" class="form-control" id="productImage" name="image">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
  @endif

@endsection
