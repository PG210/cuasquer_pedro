@extends('master')
@section('content')

<div class="alert alert-primary" role="alert">
<h5 class="text-center">Listado de Editoriales</h5>
<a href="{{route('regEditorial')}}" class="btn btn-secondary">Registrar</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Telefono</th>
        </tr>
    </thead>
    <tbody>
    @foreach($edit as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombre}} </td>
            <td> {{ $c->direccion }}</td>
            <td> {{ $c->ciudad }} </td>
            <td> {{ $c->telefono }}</td>
            <td> <a href="{{route('actualizar', $c->id)}}">Actualizar</a></td>
            </tr>
    @endforeach
    </tbody>
</table >
@stop