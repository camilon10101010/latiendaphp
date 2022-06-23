@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Catálogo de productos</h1>
</div>
@foreach($productos as $productos)
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{ asset('img/'.$productos->imagen ) }}">
          <span class="card-title">{{$productos->nombre}}</span>
          
        </div>
        <div class="card-content">
          <p>{{ $productos->descripcion }}</p>
          <ul>
            <li>Precio: $ {{ $productos->precio }}</li>
            <li>Categoria: {{ $productos->categoria->nombre }} </li>
            <li>Marca: {{ $productos->marca->nombre }} </li>
        </ul>
        </div>
      </div>
    </div>
  </div>

@endforeach
@endsection