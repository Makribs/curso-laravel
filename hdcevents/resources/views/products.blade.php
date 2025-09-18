@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    @if ($search)
        <h2>Searching for: {{ $search }}</h2>
    @endif
    <h1>Products Main Page</h1>
    <a href="/">Main Page.</a>
@endsection