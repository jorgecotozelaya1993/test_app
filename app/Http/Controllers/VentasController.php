<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Productos;
use App\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $ventas = DB::table('ventas')
            ->join('clientes','ventas.cliente_id','=','clientes.id')
            ->join('productos','ventas.producto_id','=','productos.id')
            ->select('ventas.id','clientes.nombre_completo','productos.nombre','ventas.fecha_venta','ventas.cantidad')
            ->get();

        $clientes = Clientes::all();
        $productos = Productos::all();
        $venta = new Ventas();
        return view('app.ventas.index', compact('ventas','venta','clientes','productos'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $data = request()->validate([
            "producto_id" => "required",
            "cliente_id" => "required",
            "fecha_venta" => "required",
            "cantidad" => "required",
        ]);
        //Buscar producto
        $getProduct = Productos::find($data['producto_id']);
        
        //Validate stock
        if($getProduct->stock >= $data['cantidad']){
            DB::table('productos')->where('id',$data['producto_id'])->decrement('stock',$data['cantidad']);
            Ventas::create($data);
            return redirect()->route('ventas.index')->with('success','Venta agregada');
        }
        //Producto inficientes return
        return redirect()->route('ventas.index')->with('error','Producto insuficiente');
    }

    public function chageStock(){

    }

    
    public function show(Ventas $venta)
    {
        //
    }

    
    public function edit(Ventas $venta)
    {
        //
    }

    
    public function update(Request $request, Ventas $venta)
    {
        //
    }

   
    public function destroy($id)
    {
        
        $venta = Ventas::where('id','=',$id)->delete();

        return redirect()->route('ventas.index')->with('success','Venta eliminada');
    }
}
