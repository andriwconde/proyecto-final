@extends('layouts.app')

@section('content')
      <h1>Bienvenido</h1>
      <ul>
        @foreach ($rolls as $roll)
          <li>{{$roll->title}}</li>
        @endforeach
      </ul>
@endsection
