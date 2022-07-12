@extends('plantilla')

@section('content')

<h3>Crear Articulo</h3>

<form action="/articulos" method="POST">
    @csrf
    <div class="mt-3">
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control">
    </div>
    <div class="mt-3">
        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control">
    </div>
    <div class="mt-3">
        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control">
    </div>
    <div class="mt-3">
        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" class="form-control">
    </div>

    <div class="mt-4 d-flex justify-content-end">
        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success ml-2">Craer</button>
    </div>
</form>

@endsection