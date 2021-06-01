@extends('layouts.app')
@section('content')
<div class="container">

<a href="{{ url('calzado/create') }}" class="btn btn-success" >Registrar nuevo calzado</a>
<br>
<br>
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Calzado</th>
            <th>Tipo</th>
            <th>Color</th>
            <th>Talla</th>
            <th>Marca</th>
            <th>Genero</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($calzados as $calzado)
        <tr>
            <td>{{ $calzado->id }}</td>
            <td>{{ $calzado->calzado }}</td>
            <td>{{ $calzado->tipo }}</td>
            <td>{{ $calzado->color }}</td>
            <td>{{ $calzado->talla }}</td>
            <td>{{ $calzado->marca }}</td>
            <td>{{ $calzado->genero }}</td>
            <td>{{ $calzado->edad }}</td>
            <td>
            
            <a href="{{ url('/calzado/'.$calzado->id.'/edit') }}" class="btn btn-warning" >Editar</a>
            |
            <form action="{{ url('/calzado/'.$calzado->id) }}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Desea realizar la eliminación?')" value="Borrar">
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection