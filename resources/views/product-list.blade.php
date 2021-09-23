@extends('template')
 
@section('titre')
    Catalogue
@endsection

@section('contenu')
    <p>Benvenue dans notre Catalogue !</p>

    @foreach($products as $product)
        <p>{{$product->name}};</p>
        <p>{{$product->price}} €</p>
    
    @endforeach
@endsection



