@csrf

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Nombre: </span>
    </div>
    <input name="nombre" type="text" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" value="{{ old('nombre',$cliente->nombre) }}">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Apellido: </span>
    </div>
    <input name="apellido" type="text" class="form-control {{ $errors->has('apellido') ? 'is-invalid': '' }}" value="{{ old('apellido',$cliente->apellido) }}">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">DUI: </span>
    </div>
    <input type="text" step="0.01" name="dui" max="11" class="form-control {{ $errors->has('dui') ? 'is-invalid': '' }}" value="{{ old('dui',$cliente->dui) }}">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon1">Fecha nacimiento</span>
    </div>
    <input type="date" name="fecha_nacimiento" class="form-control {{ $errors->has('fecha_nacimiento') ? 'is-invalid' : '' }}" value="{{ old('fecha_nacimiento',$cliente->fecha_nacimiento) }}">
</div>