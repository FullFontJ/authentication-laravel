@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')

<form  style="max-width: 30rem;position: relative; left: .8rem; top: 10rem;" class="container" action="/login" method="POST">
        @csrf

        @include('layouts.message')
        
    <div class="mb-3">
      <label for="Email" class="form-label">Username or Email</label>
      <input type="text" class="form-control" name="username" id="" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="">
    </div>

    <div class="mb-3">
        <a href="/register">Create account</a>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
