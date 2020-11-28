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
###########     MARCAS #############
Route::get('/adminMarcas', function()
{
    $marcas = DB::table('marcas')->get();
 return view('adminMarcas', ['marcas'=>$marcas]);
});

###########     CATEGORIAS #############
Route::get('/adminCategorias', function()
{
    $categorias = DB::table('categorias')->get();
    return view('adminCategorias', ['categorias'=>$categorias]);
});

###########     PRODUCTOS #############
Route::get('/adminProductos', function()
{
    $productos = DB::table('productos')->get();
    return view('adminProductos', ['productos'=>$productos]);
});

###########     USUARIOS #############
Route::get('/adminUsuarios', function()
{
    return view('adminUsuarios');
});