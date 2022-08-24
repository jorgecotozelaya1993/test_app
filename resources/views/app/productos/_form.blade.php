@csrf
<div class="input-group">
    <div class="input-group-prepend mb-3">
        <span class="input-group-text" id="basic-addon1">Producto: </span>
      </div>
    <input name="nombre" type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre',$producto->nombre) }}">
</div>

<div class="input-group">
    <div class="input-group-prepend mb-3">
        <span class="input-group-text">Descripción:</span>
    </div>
    <textarea class="form-control {{ $errors->has('descripcion')? 'is-invalid' : '' }}" name="descripcion">{{ old('descripcion',$producto->descripcion) }}</textarea>
</div>

<div class="input-group">
    <div class="input-group-prepend mb-3">
        <span class="input-group-text" id="basic-addon1">Stock: </span>
      </div>
    <input type="number" name="stock" class="form-control {{ $errors->has('stock')? 'is-invalid' : '' }}" value="{{ old('stock',$producto->stock) }}">
</div>

<div class="input-group">
    <div class="input-group-prepend mb-3">
        <span class="input-group-text" id="basic-addon1">Precio: </span>
      </div>
    <input type="number" step="0.01" name="precio" class="form-control {{ $errors->has('precio')? 'is-invalid' : '' }}" value="{{ old('precio',$producto->precio) }}">
</div>