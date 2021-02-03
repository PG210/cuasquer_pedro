@extends('master')
@section('content')

<div class="alert alert-primary" role="alert">
<h5 class="text-center">Listado de libros</h5>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo</th>
            <th scope="col">Stock</th>
            <th scope="col">Estado</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento</th>
        </tr>
    </thead>
    <tbody>
    @foreach($lib as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->isbn }} </td>
            <td> {{ $c->titulo }}</td>
            <td> {{ $c->precio }} </td>
            <td> {{ $c->stock }}</td>
            <td> {{ $c->nombre }} </td>
            </tr>
        
    @endforeach
    </tbody>
</table >
@stop