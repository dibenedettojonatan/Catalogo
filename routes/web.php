<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function()
{


return view('inicio');


});
Route::get('/admin', function()
{
    return view('admin');

});

#############   MARCAS #############
Route::get('/adminMarcas', function()
{
    $marcas = DB::select('SELECT idMarca, mkNombre FROM marcas WHERE 1');
    return view('adminMarcas', ['marcas'=>$marcas]);
});

############## CATEGORIAS ############
Route::get('/adminCategorias', function()
{
    $categorias = DB::select('SELECT `idCategoria`, `catNombre` FROM `categorias` WHERE 1');
    return view('adminCategorias', ['categorias'=>$categorias]);
});

############# PRODUCTOS #############
Route::get('/adminProductos', function()
{
    /*$productos = DB::statement('SELECT  
                                    idProducto, 
                                    prdNombre, 
                                    prdPrecio, 
                                    p.idMarca, 
                                    mkNombre, 
                                    p.idCategoria, 
                                    catNombre, 
                                    prdPresentacion, 
                                    prdStock,
                                    prdImagen);*/
    $productos = DB::table('productos as p')  
                         ->join('marcas as m', 'p.idMarca', '=', 'm.idMarca')
                         ->join('categorias as c', 'p.idCategoria', '=', 'c.idCategoria')
                         ->get();         

    return view('adminProductos', ['productos'=>$productos]);
});

############## USUARIOS ############
Route::get('/adminUsuarios', function()
{
    $usuarios = DB::table('usuarios')->get();

    return view('adminUsuarios', ['usuarios'=>$usuarios]);

});