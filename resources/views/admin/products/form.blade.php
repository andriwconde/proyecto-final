<form action="{{ url($url) }}" method="post">
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

    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>
