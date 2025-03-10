@extends('template')
@section('titlePage', 'Login')
@section('content')
<form action="{{route('login-user')}}" method="POST">
    @csrf
    @method('POST')
    <h1>Login</h1>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <a href="{{route('register')}}">register</a>


  @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach
  @endif

@endsection
