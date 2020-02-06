@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Editar menu</h1>
            @include('admin.menus.form', [
                'method' => 'patch',
                'url' => 'menu/'. $menu->id,
            ])
        </div>
    </div>
</div>
@endsection
