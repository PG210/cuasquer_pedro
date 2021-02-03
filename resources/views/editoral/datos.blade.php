@extends('master')
@section('content')
<form  action ="{{route('actuEdit', $p->id)}}" method="POST">

@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$p->nombre}}" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="dir" name="dir" value="{{$p->direccion}}" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Telefono</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="tel" name="tel" value="{{$p->telefono}}" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="col-md-6">
  <label for="validationCustom03" class="form-label">Ciudad</label><br>
    <select id="ciu" name="ciu" required>
    @foreach($editor as $c)
    <option value="{{$c->id}}">{{$c->ciudad}}</option>
    @endforeach
    </select>
  </div>
  
  <br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">REGISTRAR</button>
  </div>
 
  <br>
</form>
@stop