@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Prodotto: {{$product->id}}</h1>

    <ul>
      <li>Name: {{$product->name}}</li>
      <li>Name: {{$product->description}}</li>
      <li>Name: {{$product->price}}</li>
    </ul>



  </div>


@endsection
