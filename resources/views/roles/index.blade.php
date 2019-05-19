
@extends('store.template')

@section('content')
    <br>

<div class="container">

<div class="row justify-content-center">
    <div class="product-block">

<div class="card-header" align="center"> <h1><span class="badge badge-light">  <i class="fa fa-user-tag"> </i>  LISTADO ROLES</span></h1></div>
    <br>

<div class="container" align="center">
<a href="{{ route('roles.create') }}" class="btn btn-success btn-block" style="justify-content-right" > <i class="fa fa-plus-square" style="font-size:20px"></i> </a><hr>
</div>

<div class="container-fluid table-responsive" style="text-align:center" >

<table class="table table-striped   table-responsive table-hover" class="justify-content-center" class="text-justify" >
<thead class="thead-dark">
<th>ID</th>
<th>NOMBRE</th>
<th>DESCRIPCION</th>
<th>ACCION</th>
</thead>

<tbody>
@foreach($roles as $roles)
<tr>
<td> {{ $roles -> id }}</td>
<td> {{ $roles -> nombre }}</td>
<td> {{ $roles -> descripcion }}</td>

<TD>
<a href="{{ route('roles.index.edit', $roles->id) }}"  class="btn btn-warning" > <i class="fa fa-edit" style="font-size:12px"></i> </a>

<a href="{{ route('roles.index.destroy' , $roles->id) }}" onclick="return confirm('¿Eliminar Rol?')" class="btn btn-danger">
    <i class="fa fa-trash-alt" style="font-size:12px"></i>
</a>
</TD>
</tr>
@endforeach

</tbody>
</table>

</div>

        <hr>
        <a href="javascript:history.back()" class="btn btn-block btn-dark"> Volver Atrás</a>




</div>
</div>
</div>
@endsection
