@extends('plantilla')


@section('content')

<h3>Editar un producto</h3>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="mt-3">
        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
    </div>
    <div class="mt-3">
        <label for="cantidad">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="mt-3">
        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" class="form-control" value="{{$articulo->precio}}">
    </div>

    <div class="row mt-3 justify-content-end">
        <a href="/articulos" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success ml-2">Editar</button>
    </div>
</form>
@endsection