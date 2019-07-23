@extends('layouts.app')

@section('content')
  <div class="container">
  <h1>Modifica prodotto {{$product->id}}</h1>
  <form class="" action="{{route('products.update')}}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="name">Nome</label>
      <input class="form-control" type="text" name="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
      <label for="name">Descrizione</label>
      <textarea class="form-control" name="description" rows="8" cols="80">{{$product->description}}</textarea>
    </div>
    <div class="form-group">
      <label for="name">Prezzo</label>
      <input class="form-control" type="text" name="price" value="{{$product->price}}">
    </div>
  </form>
  <div class="form-group">
    <input class="btn btn-success" type="submit"  value="crea">
  </div>
</form>
<div>
@endsection
