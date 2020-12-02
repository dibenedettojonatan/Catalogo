@extends('layouts.plantilla')

    @section('contenido')
<main class="container">
    <h1>Panel de administración de categorías</h1>

    <a href="admin" class="btn btn-outline-secondary m-2">
        Volver a principal
    </a>

    <table class="table table-hover table-bordered table-stripped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Categoría</th>
                <th colspan="2">
                    <a href="" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>

@foreach($categorias as $categoria)
    

            <tr>
            <td>{{$categoria->idCategoria}}</td>
                <td>{{$categoria->catNombre}}</td>
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

    <a href="admin" class="btn btn-outline-secondary m-2">
        Volver a principal
    </a>

</main>
@endsection