@extends('layouts.app')

@section('content')



  <div class="d-flex justify-content-center my-0" id="section">

    <form action="{{route('register')}}" novalidate method="post" enctype="multipart/form-data" autocomplete="off">
     @csrf
      <h1 class="form-grup col-md-12">Bienvenido a
        <img src="http://wooyko.com/templates/jblank/images/logo.png"width="30%" alt="">
      </h1>

      <h5 class="form-grup col-md-12">Segui los pasos para registrarte </h5>


      <div class="d-flex flex-wrap">

      <div class="form-group col-md-6">
        <label for="email" class="">{{ __('E-Mail') }}</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email" name="email"  value="{{ old('email') }}" required autocomplete="email">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      <div class="form-group col-md-6 flex-right">
      <label for="name" class="">{{ __('Nombre') }}</label>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
       @error('name')
           <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      </div>


          <div class="form-group col-md-6">
            <label for="inputPassword4">Contraseña</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                  @enderror

          </div>


          <div class="form-group col-6">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ej: Arenales 3062" name="direccion" value="">
          </div>

          <div class="form-group col-md-6">
            <label for="inputCity">Provincia</label>
            <input type="text" class="form-control" id="inputCity" name="provincia" value="">
          </div>
  <br>
          <div class="form-group col-md-6">
            <label for="inputState">Pais</label>
            <select id="inputState" class="form-control" name="pais">
              <option selected>Argentina</option>
              <option>Brasil</option>
              <option>Chile</option>
              <option>Uruguay</option>
            </select>
          </div>
         </div>
          <br>

          <div class="form-group col-xl-12">
             <input type="file" name="avatar" value="">
          </div>

          <button type="submit" class="btn btn-outline-dark align-items-end ml-3">Registrarme</button>

    </form>

  </div>
  <script src="script.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
