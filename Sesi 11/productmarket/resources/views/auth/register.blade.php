@extends('template')
@section('content-name', 'Register')
@section('content')
<form action="{{route('register-user')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="email" class="form-label">
            Email
        </label>
        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
        @error('email')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">
            Name
        </label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">
            Password
        </label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="confirm-password" class="form-label">
            Confirm Password
        </label>
        <input type="password" class="form-control" id="confirm-password" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{route('login')}}">Login here</a>
@endsection
