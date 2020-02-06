@extends('layouts.app')
<form action="{{ url($url) }}" enctype="multipart/form-data" method="post">
    @csrf

    @method($method)

    <div class="form-group">
        <label>Nombre</label>
        <input
            class="form-control"
            type="text" name="name"
            value="{{ old('name', $product->name) }}">

        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input
            class="form-control"
            type="number" name="price"
            value="{{ old('price', $product->price) }}">
    </div>


    <div class="form-group">
        <label for="">Descripcion</label>
        <textarea class="form-control" name="description">{{ $product->description }}</textarea>
    </div>
    <label for="">Tipo de menu</label>
  <select class="form-group" name="menu">
    @foreach ($menues as $menu)
      <option value="{{$menu->id}}">{{$menu->name}}</option>
    @endforeach
  </select>
  <div class="form-group col-xl-12">
    <label for="">Adjuntar foto del producto</label><br>
     <input type="file" name="img" value="">
  </div>

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
