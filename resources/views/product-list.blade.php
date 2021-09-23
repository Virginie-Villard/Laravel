@extends('template')
 
@section('titre')
    Catalogue
@endsection

@section('contenu')
    <h2>Benvenue dans notre Catalogue !</h2>

    @foreach($products as $product)
        <a href="/product/{{ $product->id }}" class="displayProduct">
            <p>{{$product->name}};</p>
            <p>
                @if($product->price>100)
                    {{$product->price}} €, c'est cher !
                
                @else
                    {{$product->price}} €, ça va ! ;)

                @endif
            </p>
        </a>
    @endforeach
@endsection



