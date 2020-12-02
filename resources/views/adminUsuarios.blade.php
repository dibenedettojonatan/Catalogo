@extends('layouts.plantilla')

    @section('contenido')
    <main class="container">
        <h1>Panel de administración de usuarios</h1>

        <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th colspan="2">
                        <a href="formAgregarUsuario" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>

@foreach($usuarios as $usuario)
    


                <tr>
                    <td>{{$usuario->idUsuario}} </td>
                    <td>{{$usuario->usuNombre}} </td>
                    <td>{{$usuario->usuApellido}} </td>
                    <td>{{$usuario->usuEmail}}</td>
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