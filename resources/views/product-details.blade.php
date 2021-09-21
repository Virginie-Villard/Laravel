@extends('template')
 
@section('titre')
    Artcile n° {{ $product }}
@endsection

@section('contenu')
    <p>Description de l'article n° {{ $product }}</p>
@endsection

