@extends('master')
@section('content')
<h5 class="text-center">Libreria Nacional</h5>

<div class="row">
<div class="col-sm-4">
  <img src='{{url("/img/img1.jpg")}}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nosotros</h5>
    <p class="card-text">En la Librería Nacional nos destacamos también por la novedosa integración de heladerías y cafeterías dentro de nuestras sedes (en las de Cali particularmente)</p>
    
  </div>
</div>
  <div class="col-sm-4">
  <img src='{{url("/img/img2.jpg")}}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Historia</h5>
    <p class="card-text">La Librería Nacional de Colombia fue fundada en la ciudad de Barranquilla en septiembre de 1941, y fue pionera en la modalidad de autoservicio y en la venta y distribución de revistas en el país.</p>
   
  </div>
</div>
  <div class="col-sm-4">
  <img src='{{url("/img/img3.jpg")}}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Servicios</h5>
    <p class="card-text">La libreria Nacional vende y alquila libros en todas las categorias y a los mejores precios </p>
  
  </div>
</div>
</div>
 
@stop