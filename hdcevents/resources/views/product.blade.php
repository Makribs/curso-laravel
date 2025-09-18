@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <h1>Product Page by ID</h1>
    @if ($id != null)
        <h2>Product ID: {{ $id }}</h2>
        <a href="/products">Products Page.</a>

    @endif
@endsection