@extends('layouts.app')

@section('content')

<section  class="d-inline-flex p-2 bd-highlight col-xl-8 tarjetaproducto ">
  <div class= "producto col-5" id="producto12">
    <img src="{{ Storage::url($product->image) }}" class="card-img-top img" alt="Menu" id="imagen12">
    <div class="card-body" >
      <h3 class="card-title">{{$product->name}}</h3>
      <p class=" card-text grey-text">{{$product->description}}</p>
      <p class=" card-text grey-text">U$D{{$product->price}}</p>
    </div>
  </div>
</section>

@endsection
