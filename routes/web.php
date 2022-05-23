<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('paises' , function(){
    $paises = [
        "Colombia"  => [
            "cap"   => "Bogota",
            "mon"   => "Peso",
            "pob"   => 51,
            "ciu"   => [
                "Medellin",
                "Cali",
                "Pereira"
            ]
        ], 
        "Ecuador" => [
            "cap"   => "Quito",
            "mon"   => "Dolar",
            "pob"   => 20,
            "ciu"   => [
                "Cuenca",
                "Guayaquil",
        ]
            ]
            ];

            return view('paises')
                ->with('paises', $paises);
}); 


Route::get('prueba' , function(){
    //Seleccionar todas marcas
    $marcas = Marca::all();
    $categorias = Categoria::all();
    //Ingresar marcas y categorias a la vista
    return view('productos.create')
                ->with('categorias', $categorias)
                ->with('marcas', $marcas);
});

//Rutas rest 
Route::resource('productos', ProductoController::class);