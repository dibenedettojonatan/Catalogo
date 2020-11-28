@extends('layouts.plantilla')

    @section('contenido')
<main class="container">
    <h1>Dashboard - Administración</h1>

    <section class="list-group">
        <a href="adminMarcas" class="list-group-item list-group-item-action">
            Panel de administración de marcas.
        </a>
        <a href="adminCategorias" class="list-group-item list-group-item-action">
            Panel de administración de categorías.
        </a>
        <a href="adminProductos" class="list-group-item list-group-item-action">
            Panel de administración de productos.
        </a>
        <a href="adminUsuarios" class="list-group-item list-group-item-action">
            Panel de administración de usuarios.
        </a>
    </section>

</main>
@endsection