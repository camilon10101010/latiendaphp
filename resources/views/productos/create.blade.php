@extends('layouts.principal')
@section('contenido')


    <form class="col s8" method="POST" action ="{{route ('productos.store') }}" enctype="multipart/form-data">
      
    @csrf
    @if( session('mensajito') )
      <div class="row">
        <strong>{{ session('mensajito') }}</strong>
      </div>
    @endif
      
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
          <strong>{{ $errors->first('nombre') }}</strong>
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
          <strong>{{ $errors->first('desc') }}</strong>
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
          <strong>{{ $errors->first('precio')}}</strong>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
            <select name="marca" id="marca">
                <option value="">
                    Elija su marca
                </option>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}" >{{ $marca->nombre }}</option>
                @endforeach
            </select>
            <label>Elija marca</label>
            <strong>{{ $errors->first('marca') }}</strong>

        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="categoria" id="categoria">
            <option value="">Elija la categoria</option>
            @foreach($categorias as $categoria)
             <option value="{{ $categoria->id }}">
               {{ $categoria->nombre }}
             </option>
            @endforeach
          </select>
          <label>Elija Categoria</label>
          <strong>{{ $errors->first('categoria') }}</strong>
        </div>
      </div>
  
    <div class="file-field input-field">
      <div class="btn">
        <span>Imagen</span>
        <input type="file" name="imagen" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
      <strong>{{ $errors->first('imagen') }}</strong>
    </div>
      <div class="row">
         <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
         </button>
      </div>
    </form>

  @endsection