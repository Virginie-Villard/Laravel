@extends('template')
 
@section('titre')
    Catalogue
@endsection

@section('contenu')
    <h2>Benvenue dans notre Catalogue !</h2>

    @foreach($products as $product)
        <p>{{$product->name}};</p>
        <p>{{$product->price}} €</p>
    
    @endforeach
@endsection



