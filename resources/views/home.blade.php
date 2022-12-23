@extends('layouts.app')


@section('title')
Home
@endsection

@section('content')

<nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Home</a>
        <div class="d-flex">
            <a class="btn btn-primary stretched-link" href="/logout">Logout</a>
        </div>
    </div>
</nav>

@include('layouts.message')

@endsection
        
        
