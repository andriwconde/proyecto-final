@extends('layouts.app')

@section('content')
  <!-- PRODUCTOS -->
  <div class="col-10 rounded mx-auto d-block">
    <section class="my-4">
      @foreach ($products as $product)
        <div class="col-md-4">
          <div class="row">
              <img src="{{ Storage::url($product->image) }}" alt="Menu">
              <h3>{{$product->name}}</h3>
              <p class="grey-text">{{$product->description}}</p>
              <a class="btn btn-outline-dark btn-sm" href="products/{{$product->id}}">Ver detalle</a>
          </div>
        </div>
      @endforeach
    </section>
  </div>
@endsection
