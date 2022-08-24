<?php

namespace App\Http\Controllers;

use App\Productos;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $productos = Productos::all();
        $producto = new Productos(); //Evita el error de formulario
        return view('app.productos.index',compact('productos','producto'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "stock" => "required",
            "precio" => "required"
        ]);
        Productos::create($data);
        return redirect()->route('productos.index')->with('success','Registrado');
    }

    public function show(Productos $producto)
    {
        //
    }


    public function edit(Productos $producto)
    {
        return view('app.productos.edit',compact('producto'));
    }

    public function update(Request $request, Productos $producto)
    {
        $data = request()->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "stock" => "required",
            "precio" => "required"
        ]);
        $producto->update($data);
        return redirect()->route('productos.index')->with('success','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success','Eliminado');
    }
}
