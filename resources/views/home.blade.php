@extends('layouts\app')

@section('content')
@if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif



<!-- PRODUCTOS -->
<div class="col-10 rounded mx-auto d-block">

  @foreach ($menues as $menu)
    <section class="my-4">

      <h1 id="tituloMenu">{{$menu->name}}</h1>

      <div class="row">
        @foreach ($menu->products as $product)  
          <div class="col-md-4">
            <div class="row">
                <img src="img/postres.jpeg" alt="Menu">
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a class="btn btn-outline-dark btn-sm" href="">Ver detalle</a>
            </div>
          </div>
        @endforeach

      </div>
    </section>
  @endforeach

</div>

  <hr>

  <!-- SECTION INFORMATIVA -->
  <section class="text-center rounded mx-auto d-block my-5">

    <div class="row col-12">

      <div class="col-md-4">

        <a href="contacto.php"><i class="fas fa-map-marked-alt fa-3x red-text"></i></a>
        <h5 class="font-weight-bold my-4">Contactanos</h5>

      </div>

      <div class="col-md-4">

        <a href="#"><i class="fas fa-book fa-3x cyan-text"></i></a>
        <h5 class="font-weight-bold my-4">FQA</h5>

      </div>

      <div class="col-md-4">

        <a href="#"><i class="far fa-address-card fa-3x orange-text"></i></a>
        <h5 class="font-weight-bold my-4">Nosotros</h5>

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
            <!--Linkedin -->
            <a class="li-ic" href="https://www.linkedin.com/">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic" href="https://www.instagram.com/">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic" href="https://www.pinterest.com/">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="inicio.php"> Logo.com</a>
    </div>

  </footer>

@endsection
