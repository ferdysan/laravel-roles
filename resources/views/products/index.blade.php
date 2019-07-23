@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="pull-left">tutti i prodotti</h1>
    <a class="pull-right btn btn-primary" href="{{route('products.create')}}">Inserisci prodotto</a>
    <table class="table">
      <thead>
        <th>TD</th>
        <th>Name</th>
        <th>Description</th>
        <th>Prezzo</th>
      </thead>
    </table>

    <tbody>
      @forelse ($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
          <td>
            <a class="btn btn-info" href="{{route('products.show', $product->id)}}">View</a>
            <a class="btn btn-success" href="{{route('products.edit', $product->id)}}">Edit</a>
            <form action="{{route('products.destroy', $product->id)}}" method="post">
              @method('DELETE')
              @csrf
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
          </td>
        </tr>

      @empty
        <tr>
          <td colspan="5">
            non ci sono prodotti
          </td>
        </tr>

      @endforelse
    </tbody>


  </div>

@endsection
