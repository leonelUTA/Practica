@extends('plantilla')

@section('content')

<h3>Index Articulos</h3>
<a href="articulos/create" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>

        </tr>

    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->descripcion }}</td>
                <td>{{ $articulo->cantidad }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

@endsection