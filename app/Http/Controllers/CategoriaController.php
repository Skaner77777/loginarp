<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;//BD 
use Carbon;
use DB;

class CategoriaController extends Controller
{
    //Se definen los permisos que entraran a las funciones
    function __construct()
    {
         $this->middleware('permission:categoria-list|categoria-create|categoria-edit|categoria-delete', ['only' => ['listaCategoria','mostrarCategoria']]);
         $this->middleware('permission:categoria-create', ['only' => ['crearCategoria','guardarCategoria']]);
         $this->middleware('permission:categoria-edit', ['only' => ['editarCategoria','modificarCategoria']]);
         $this->middleware('permission:categoria-delete', ['only' => ['eliminarCategoria']]);
    }

    public function listaCategoria()
    {
        //Funcion que realiza una alta de categoria
        $sqllistaCategoria=Categoria::listaCategoria(); 
        return view('categoria.listaCategoria',compact('sqllistaCategoria'));
    }

    public function mostrarCategoria()
    {
        echo "Mostrara los atributos de la categoria";
    }

    public function crearCategoria()
    {
        return view('categoria.crearCategoria');
    }

    public function guardarCategoria(Request $request)
    {   
        //Validacion del formulario
        $request->validate([
            'nombreCategoria' => 'required',
            'descripcionCategoria' => 'required'
        ]);

        //Valores que se enviaran a la funcion guardarCategoria
        $nombreCategoria = $request->nombreCategoria;
        $descripcionCategoria = $request->descripcionCategoria;
        $created_at = Carbon\Carbon::now(); // Obtenemos la hora-dia actual

        //Funcion que realiza una alta de categoria
        Categoria::guardarCategoria($nombreCategoria,$descripcionCategoria,$created_at);  
        
        return redirect('/listaCategoria')->with('alta','La categoria fue dada de alta exitosamente');
    }

    public function editarCategoria()
    {
        echo "Editar";
    }

    public function modificarCategoria()
    {
       echo "Modificar";
    }

    public function eliminarCategoria()
    {
        echo "Eliminar";
    }

}
