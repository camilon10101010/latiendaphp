@extends('layouts.principal')

@section('contenido')
    <form class="col s8">
        <div class="row">
            <div class="col s8">
                <h1 class="pink-text text-darken-4">Nuevo Producto</h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s6">
          <input 
            placeholder="Nombre de Producto" 
            id="nombre" 
            type="text" 
            class="validate">
          <label for="nombre">
              Nombre del producto
          </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input
          id="desc" 
          type="text" 
          class="validate">
          <label for="decripcion">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
          id="precio" 
          type="number" 
          class="validate">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
            <select name="marca" id="marca">
                <option>
                    Elija su marca
                </option>
                @foreach($marcas as $marca)
                <option>{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
            <div class="btn">
                <span>Ingrese Imagen...</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input 
                class="file-path validate" 
                type="text">
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col s8">
          <a class="waves-effect waves-light btn"><i class="material-icons right">Guardar</i></a>
        </div>
      </div>
    </form>

  @endsection