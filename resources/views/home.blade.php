@extends('layouts.app')

@section('content')

<!-- PRODUCTOS -->
<div class="col-10 rounded mx-auto d-block">

  @foreach ($menues as $menu)
    <section class="my-4">

      <div class="titulo">
        <h1 class="tituloMenu pl-3 pt-1">{{$menu->name}}</h1>
      </div>

      <div class="row">
        @foreach ($menu->products as $product)
          <div class="col-md-2 mx-2">
            <div class="row p-2 " id="producto12">
                <img src="{{ Storage::url($product->image) }}" max-width="20%"  alt="Menu" id="foto12">
                <div>
                  <h3>{{$product->name}}</h3>
                  <p class="grey-text">{{$product->description}}</p>
                  <a class="btn btn-outline-dark btn-sm" href="products/{{$product->id}}">Ver detalle</a>
                </div>
            </div>
          </div>
        @endforeach

      </div>
    </section>
  @endforeach

</div>


  <section class="text-center rounded mx-auto d-block my-5">

    <div class="row col-12 justify-content-around">

      <div class="col-md-3 foo">

        <a href="{{route('contactanos')}}">
          <i class="fas fa-map-marked-alt fa-3x red-text">
            <h5 class="font-weight-bold my-4">Contactanos</h5>
          </i>
        </a>


      </div>

      <div class="col-md-3 foo">


        <a href="{{route('faqs')}}">
          <i class="fas fa-book fa-3x cyan-text">
          <h5 class="font-weight-bold my-4">FQA</h5>
        </i>
      </a>

      </div>
    </div>

  </section>

  <!-- FOOTER -->
  <footer class="page-footer font-small cyan darken-3">

    <div class="container">
      <div class="row">

        <div class="col-md-12 py-5">
          <div class="d-flex justify-content-center">

            <!-- Facebook -->
            <a class="fb-ic" href="https://www.facebook.com/">
              <i class="fab fa-facebook-square fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic" href="https://www.twitter.com/">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic" href="https://www.instagram.com/">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="{{ url('/') }}"> Wooyko.com</a>
    </div>

  </footer>

@endsection
