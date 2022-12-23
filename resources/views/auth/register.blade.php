@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')

<form  style="max-width: 30rem;position: relative; left: .8rem; top: 6rem;" class="container" action="/register" method="POST">
    @csrf

    @include('layouts.message')
    
    <div class="mb-3">
    <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="" >
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="" >
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="" >
    </div>

    <div class="mb-3">
        <label class="form-label">Repeat Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="" >
    </div>

    <div class="mb-3">
        <a href="/login">Sign in</a>
    </div>


    <button type="submit" class="btn btn-primary">Create account</button>
</form>
@endsection