@extends('template')
 
@section('titre')
    {{ $product->name }}
@endsection

@section('contenu')
    <p>{{ $product->name }}</p>
    <p>{{ $product->price }} €</p>
@endsection

