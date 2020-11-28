@extends('layouts.plantilla')

    @section('contenido')
<main class="container">
    <h1>Panel de administración de marcas</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Marca</th>
                <th colspan="2">
                    <a href="" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
@foreach($marcas as $marca)
    

            <tr>
            <td>{{$marca->idMarca}}</td>
            <td>{{$marca->mkNombre}}</td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
@endforeach
        </tbody>
    </table>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

</main>
@endsection