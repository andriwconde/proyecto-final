@extends('layouts.app')

@section('content')
  <body class="container-fluid p-0 ">
<section class="col-sm-12 p-0 col-xl-12">
  <div class="m-0" id="titulo">
    <h2 class="titulo d-flex align-items-end pl-xl-3 py-2">
      Preguntas Frecuentes</h2>
  </div>

  <div class="accordion m-0" id="accordionExample">
  <div class="card">
    <div class="card-header hiper" id="headingOne">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="pregunta1">
          ¿Debo estar registrado para hacer un pedido?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Para finalizar y confirmar el pedido debes estar registrado. Puedes hacerlo haciendo login a través de Facebook o ingresando los siguientes datos: Nombre, Apellido, Email y Contraseña.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header hiper" id="headingTwo">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="pregunta2">
          ¿Cuáles son los métodos de pago?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      Pago en la entrega:
(i) Pago en efectivo: En la página de confirmación podrás indicar el monto exacto con el que vas a pagar para que el repartidor llegue con el cambio justo.
(i) Pago con POS: Podrás pagar con tu tarjeta de crédito o débito en la entrega.
Pago Online (tarjeta de crédito o débito)
Cuando elijas realizar el pago online: (i) Podrás cargar una tarjeta de crédito o débito para abonar el monto del pedido. Esta información es gestionada de forma segura; tus datos no son almacenados en PedidosYa. (ii) O podrás seleccionar una tarjeta de crédito o débito que hayas cargado previamente.
En cualquiera de los dos casos, el monto se descuenta al realizar el pedido. En caso que posteriormente el pedido sea cancelado, Wooyko procesa la devolución al instante, pero el reintegro efectivo depende de los tiempos estipulados según las políticas de cada institución emisora de la tarjeta.
En el detalle de la transacción podrás verificar la información completa del pago.
Si tienes dudas respecto al pago online puedes comunicarte con nuestro equipo de Atención al Cliente a través del chat disponible en nuestra plataforma o al mail contacto@wooyko.com
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header hiper" id="headingThree">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="pregunta3">
          ¿Se puede ordenar bebidas?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Sí. Puedes acceder a todas las opciones del menú que el restaurante ofrezca, incluyendo bebidas, postres, pan, etc.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header hiper" id="headingFour">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="pregunta4">
          ¿Realizar pedidos es gratis?
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        Sí. Totalmente gratis. Realizar un pedido no tiene costo adicional al que se abona al restaurante.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header hiper" id="headingFive">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="pregunta5">
          ¿Cómo hago para acceder a promociones y descuentos especiales?
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        En el menú de inicio podras encontrar todas las ofertas y descuentos de la semana

A su vez puedes inscribir tu email para recibir promociones y descuentos exclusivos para usuarios de Wooyko.
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header hiper" id="headingSix">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" id="pregunta6">
          ¿Es seguro pedir comida a través de su plataforma?
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        Wooyko cuenta servidores de última tecnología para la recepción de órdenes y el registro seguro de información. Toda la información recibida es confidencial. A su vez nuestro centro de atención al cliente está siempre disponible para asegurar que los pedidos sean enviados correctamente.
      </div>
    </div>
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
    <a href="inicio.php"> Wooyko.com</a>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


@endsection
