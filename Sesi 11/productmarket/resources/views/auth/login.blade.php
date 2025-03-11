@extends('template')
@section('content-name', 'Login')
@section('content')
<form action="{{route('login-user')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="email" class="form-label">
            Email
        </label>
        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">
            Password
        </label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{route('register')}}">Register here</a>
@endsection
