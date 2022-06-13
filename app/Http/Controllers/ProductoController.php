<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the productos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va a ir el catalogo de productos ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $marcas = Marca::all();
       $categorias = Categoria::all();

       return view('productos.create')
            ->with('categorias', $categorias)
            ->with('marcas', $marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $reglas=[
            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|min:5|max:20',
            "precio" => 'required|numeric',
            "imagen" => 'required|image',
            "marca" => 'required',
            "categoria" => 'required'
        ];

        $v = Validator::make($r->all() , $reglas );

        if($v->fails()){
                //si la validacion fallo
                //redirigirme hacia la vista d ecreate (ruta: productos/create)
                //con los mensajes de error
                return redirect('productos/create')
                        ->withErrors($v);
        }else{
                //validacion exitosa
                $archivo=$r->imagen;
                $nombre_archivo = $archivo->getClientOriginalName();
                $ruta = public_path()."/img";
                $archivo->move($ruta , $nombre_archivo );
        
                //crear un nuevo producto
                $p = new Producto();
                //asignar atributos del producto 
                $p-> nombre = $r->nombre;
                $p-> desc = $r->desc;
                $p-> precio = $r->precio;
                $p-> marca_id = $r->marca;
                $p-> categoria_id = $r->categoria;
                $p->imagen = $nombre_archivo;
                //grabar producto 
                $p-> save();
                //redirigir a productos/create
                return redirect('productos/create')
                        ->with('mensajito' , 'pproducto registrado exitosamente');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        echo "aqui va el detalle del producto con id: $producto ";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui va el formulario para actualizar producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
