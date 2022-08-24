<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $clientes = Clientes::all();
        $cliente = new Clientes(); //Evitar error en formulario
        return view('app.clientes.index',compact('clientes','cliente'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $data = request()->validate([
            "nombre" => "required",
            "apellido" => "required",
            "dui" => "required",
            "fecha_nacimiento" => "required"
        ]);
        //Concat nombre completo
        $data['nombre_completo'] = $data['nombre']. " ". $data['apellido'];
        Clientes::create($data);
        return redirect()->route('clientes.index')->with('success','Agreado');
    }

    
    public function show(Clientes $cliente)
    {
        //
    }

    
    public function edit(Clientes $cliente)
    {
        return view('app.clientes.edit',compact('cliente'));
    }

   
    public function update(Request $request, Clientes $cliente)
    {  
        $data = request()->validate([
            "nombre" => "required",
            "apellido" => "required",
            "dui" => "required",
            "fecha_nacimiento" => "required"
        ]);
        //Concat nombre completo
        $data['nombre_completo'] = $data['nombre']. " ". $data['apellido'];
        $cliente->update($data);
        return redirect()->route('clientes.index')->with('success','Cliente actualizado');        
    }

   
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success','Cliente eliminado');
    }
}
