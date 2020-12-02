@extends('layouts.plantilla')

@section('contenido')

<tbody>
    @foreach($destinos as $destino)
        
    
                <tr>
                <td>{{$destino->destNombre}}</td>
                
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
@endsection