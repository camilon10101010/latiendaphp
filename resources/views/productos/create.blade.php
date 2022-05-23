@extends('layouts.principal')

@section('contenido')
    <form class="col s8" method="POST" action ="{{route ('productos.store') }}">@csrf
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
            class="validate"
            name= "nombre">
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
          class="validate"
          name= "desc">
          <label for="desc">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input 
          id="precio" 
          type="number" 
          class="validate"
          name= "precio">
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
                <option value="{{ $marca->id }}" >{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="categoria" id="categoria">
            @foreach($categorias as $categoria)
             <option value="{{ $categoria->id }}">
               {{ $categoria->nombre }}
             </option>
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
         <button class="btn waves-effect waves-light" type="submit">Guardar
         </button>
      </div>
    </form>

  @endsection