<form action="{{ url($url) }}"  method="post">
    @csrf

    @method($method)

    <div class="form-group">
        <label>Nombre</label>
        <input
            class="form-control"
            type="text" name="name"
            value="{{ old('name', $menu->name) }}">

        <p class="text-danger">{{ $errors->first('name') }}</p>
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary">Guardar</button>
    </div>
    </form>
