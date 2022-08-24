<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillable = ["producto_id","cliente_id","fecha_venta","cantidad"];
}
