@extends('layouts.app')
@section('content')

<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="300">
    @endif
</div>
@endsection