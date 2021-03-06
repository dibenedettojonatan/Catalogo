@extends('layouts.plantilla')

    @section('contenido')
<main class="container">
    <h1>Panel de administración de productos</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver a principal</a>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoría</th>
                <th>Presentación</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="formAgregarProducto.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
@foreach($productos as $producto)
    
          
            <tr>
                <td>{{$producto->prdNombre}}</td>
                <td>{{$producto->prdPrecio}}</td>
                <td>{{$producto->mkNombre}}</td>
                <td>{{$producto->catNombre}}</td>
                <td>{{$producto->prdPresentacion}}</td>
                <td><img src={{ ('img/'.$producto->prdImagen)}} 
                     
                    
                    
                    class="img-thumbnail"></td>
                <td>
                    <a href="formModificarProducto.php?idProducto{{$producto->idProducto}}" class="btn btn-outline-secondary">
                        Modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarProducto.php?idProducto={{$producto->idProducto}}" class="btn btn-outline-secondary">
                        Eliminar
                    </a>
                </td>
            </tr>
@endforeach             
        </tbody>
    </table>

    <a href="admin.php" class="btn btn-outline-secondary m-3">Volver a principal</a>

</main>
@endsection