<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index(){

        $ventas = DB::table('ventas')
            ->join('clientes','ventas.cliente_id','=','clientes.id')
            ->join('productos','ventas.producto_id','=','productos.id')
            ->select('ventas.id','clientes.nombre_completo','productos.nombre','ventas.fecha_venta','productos.precio','ventas.cantidad')
            ->get();

        return view('app.reporte.reporteGeneral',compact('ventas'));
    }
}
