@csrf
<div class="form-group">
    <select name="cliente_id" class="form-control">
        <option value="" required>Seleccionar cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select name="producto_id" class="form-control">
        <option value="" required>Seleccionar producto</option>
        @foreach ($productos as $producto)
            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input type="date" name="fecha_venta" class="form-control" value="{{ old('fecha_venta',$venta->fecha_venta) }}">
    {!! $errors->first('fecha_venta','<small class="form-text text-muted" id="emailHelp">:message</small>') !!}
</div>

<div class="form-group">
    <input placeholder="Cantidad" type="number" name="cantidad" class="form-control {{ $errors->first('cantidad') ? 'is-invalid': '' }} " value="{{ old('cantidad',$venta->cantidad) }}">
</div>
