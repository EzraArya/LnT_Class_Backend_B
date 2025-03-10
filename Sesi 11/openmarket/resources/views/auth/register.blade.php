@extends('template')
@section('titlePage', 'Register')
@section('content')
<form action="{{route('register-user')}}" method="POST">
    @csrf
    @method('POST')
    <h1>Register</h1>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{route('login')}}">Login</a>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
  @endif

@endsection
