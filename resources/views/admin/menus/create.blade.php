@extends('layouts\app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear menu</h1>
            @include('admin.menus.form', [
                'method' => 'post',
                'url' => '/menus',
            ])
        </div>
    </div>
</div>
@endsection
