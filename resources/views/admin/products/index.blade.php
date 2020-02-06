@extends('layouts.app')

@section('content')
  <!-- PRODUCTOS -->
  <div class="col-10 rounded mx-auto d-block">
    <section class="my-4">
      @foreach ($products as $product)
        <div class="col-md-4">
          <div class="row">
              <img src="{{ Storage::url($product->image) }}" alt="Menu">
              <img src="{{ Storage::url($product->image) }}" alt="Menu" max-width="100px">
              <h3>{{$product->name}}</h3>
              <p class="grey-text">{{$product->description}}</p>
              <a class="btn btn-outline-dark btn-sm" href="products/{{$product->id}}">Ver detalle</a>
              <form class="" action="{{url("/products/". $product->id)}}" method="post">
              @csrf
              @method("delete")
                <button class="btn btn-outline-danger btn-sm">Eliminar</button>
              </form>
          </div>
        </div>
      @endforeach
    </section>
  </div>
@endsection
